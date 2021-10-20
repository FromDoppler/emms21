import {
    countDown
} from './modules/timer.js';

import {
    validateEmailField, validateEmptyFields, validatePolicyCheckbox, resetErrorField, spinner
} from './modules/validateForm.js'

import {
    showThirdState
} from './statesHandler.js'

const fetchInvitarContactos = async () => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const data = {
        email:  localStorage.getItem('isRegistered'),
        email1: document.getElementById("email1").value,
        email2: document.getElementById("email2").value,
        source_utm: urlParams.get("utm_source"),
        campaign_utm: urlParams.get("utm_campaign"),
        content_utm: urlParams.get("utm_content"),
        term_utm: urlParams.get("utm_term"),
        medium_utm: urlParams.get("utm_medium")
    }
    await fetch('services/invitarContactos.php', {
        method: 'POST',
        body: JSON.stringify(data),
    });
    if (data.email1.length && data.email2.length)
        localStorage.setItem('invited', true);
}

const validateForm = () => {
    const requiredFields = document.querySelectorAll("input.required,select.required");
    const checkboxPolicyField = document.getElementById("acepto-politicas");
    const emailField1 = document.getElementById("email1");
    const emailField2 = document.getElementById("email2");
    
    const hasRequiredsValidate = validateEmptyFields(requiredFields);
    const hasEmailValidate = validateEmailField(emailField1);
    const hasPolicyValidate = validatePolicyCheckbox(checkboxPolicyField);
    const hasEmptyOrSecondEmailCorrect = (!emailField2.value || validateEmailField(emailField2));
    
    if (hasRequiredsValidate &&
        hasEmailValidate &&
        hasPolicyValidate &&
        hasEmptyOrSecondEmailCorrect) {
        return true
    } else {
        return false
    }
}
export const secondState = () => {
    if (window.location.hash!=="#agenda")
        document.getElementById('email1').focus();
    countDown();
    const buttonSubmitSecondState = document.getElementById("register-button-second-state");
    buttonSubmitSecondState.addEventListener("click", async () => {       
        
        if(validateForm()){
            spinner(buttonSubmitSecondState);
            await fetchInvitarContactos();
            await showThirdState();
        }else {
            document.getElementById('email1').focus();
        }
    });
    document.querySelectorAll("input,select.required").forEach((elem) => {
        elem.addEventListener('change', resetErrorField);
        elem.addEventListener('keyup', resetErrorField);
    });
}