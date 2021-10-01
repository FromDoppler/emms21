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
    const data = {
        email:  localStorage.getItem('isRegistered'),
        email1: document.getElementById("email1").value,
        email2: document.getElementById("email2").value,
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

    if ( 
        validateEmptyFields(requiredFields) &&
        validateEmailField(emailField1) &&
        validatePolicyCheckbox(checkboxPolicyField) &&
        (!emailField2.value || validateEmailField(emailField2))
    ) {
        return true
    } else {
        return false
    }
}
export const secondState = () => {
    countDown();
    const buttonSubmitSecondState = document.getElementById("register-button-second-state");
    buttonSubmitSecondState.addEventListener("click", async () => {
        if(validateForm()){
            spinner(buttonSubmitSecondState);
            await fetchInvitarContactos();
            await showThirdState();
        }
    });
    document.querySelectorAll("input,select.required").forEach((elem) => {
        elem.addEventListener('change', resetErrorField);
        elem.addEventListener('keyup', resetErrorField);
    });
}