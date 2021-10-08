import {
    validateEmptyFields,
    validateEmailField,
    validatePolicyCheckbox,
    validatePhoneField,
    resetErrorField,
    spinner
} from './modules/validateForm.js'

import {
    createPhoneField
} from './modules/validatePhone.js'

import {
    showSecondState
} from './statesHandler.js'


const fetchRegistrarEmms = async () => {
    const dialCode = document.getElementsByClassName('iti__selected-dial-code')[0].innerHTML;
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const data = {
        firstname: document.getElementById("firstname").value,
        lastname: document.getElementById("lastname").value,
        email: document.getElementById("email").value,
        phone: `${dialCode}${document.getElementById("phone-input").value}`,
        company: document.getElementById("company-input").value,
        country: document.getElementById("country").value,
        privacy: document.getElementById("acepto-politicas").checked,
        promotions: document.getElementById("acepto-promociones").checked,
        source_utm: urlParams.get("utm_source"),
        campaign_utm: urlParams.get("utm_campaign"),
        content_utm: urlParams.get("utm_content"),
        term_utm: urlParams.get("utm_term"),
        medium_utm: urlParams.get("utm_medium")
    }
    await fetch('services/registrarEmms.php', {
        method: 'POST',
        body: JSON.stringify(data),
    });
    localStorage.setItem('isRegistered', data.email);
    console.log(data);
}

const validateForm = (phoneInput) => {
    const requiredFields = document.querySelectorAll("input.required,select.required");
    const checkboxPolicyField = document.getElementById("acepto-politicas");
    const emailField = document.getElementById("email");
    
    const hasRequiredsValidate = validateEmptyFields(requiredFields);
    const hasEmailValidate = validateEmailField(emailField);
    const hasPolicyValidate = validatePolicyCheckbox(checkboxPolicyField);
    const hasPhoneValidate =validatePhoneField(phoneInput);

    if (hasRequiredsValidate &&
        hasEmailValidate &&
        hasPolicyValidate &&
        hasPhoneValidate) {
        return true
    } else {
        return false
    }
}
const activeFieldEventsValidator = (phoneInput) => {
    document.querySelectorAll("input.required,select.required").forEach((elem) => {
        elem.addEventListener('change', resetErrorField);
        elem.addEventListener('keyup', resetErrorField);
    });
    document.getElementById("phone-input").addEventListener('blur', function () {
        validatePhoneField(phoneInput);
    });
}

export const fistState = () => {
    const phoneInput = createPhoneField();
    activeFieldEventsValidator(phoneInput);
    const buttonSubmitFirstState = document.getElementById("register-button");
    buttonSubmitFirstState.addEventListener("click", async () => {
        //TODO dinamizar country    
        if (validateForm(phoneInput)) {
            spinner(buttonSubmitFirstState);
            await fetchRegistrarEmms();
            await showSecondState();
        }
    });
}