import {
    validatePhoneField
} from './validatePhone.js'

const setErrorField = (elem, typeMsg) => {

    const objMessages = {
        required_es: '¡Ouch! El campo está vacío.',
        email_es: '¡Ouch! Ingresa un Email válido.',
        URL_es: '¡Ouch! Ingresa una URL válida.',
        number_es: '¡Ouch! Ingresa un número válido.',
        policy_es: '¡Ouch! No has aceptado la Política de Privacidad.'
    }

    parent = elem.closest('.holder');
    parent.classList.add('error');
    parent.setAttribute('data-error', objMessages[typeMsg]);
}

const validatePolicyCheckbox = (policyCheckbox) => {
    if (policyCheckbox.checked) {
        return true;
    } else {
        setErrorField(policyCheckbox, "policy_es");
        return false;
    }
}

const validateEmailField = (inputEmail) => {
    if (inputEmail.value) {
        const email = inputEmail.value;
        const emailRegex = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, );

        if (email.match(emailRegex)) {
            return true;
        } else {
            setErrorField(inputEmail, "email_es");
            return false;
        }
    }
}

const validateEmptyFields = (requiredFields) => {
    Array.from(requiredFields).forEach((elem) => {
        if (!elem.value) {
            setErrorField(elem, "required_es");
        }
    });
    return document.querySelectorAll('.error').length ? false : true;
}

const resetErrorField = function (e) {
    let parent = e.target.closest('.holder');
    parent.classList.remove("error");

};

const validateForm = () => {
    const requiredFields = document.querySelectorAll("input.required,select.required");
    const checkboxPolicyField = document.getElementById("acepto-politicas");
    const emailField = document.getElementById("email");

    if (validateEmptyFields(requiredFields) &&
        validateEmailField(emailField) &&
        validatePolicyCheckbox(checkboxPolicyField) &&
        validatePhoneField()) {
        return true
    } else {
        return false
    }
}

const activeFieldEventsValidator = () => {
    document.querySelectorAll("input.required,select.required").forEach((elem) => {
        elem.addEventListener('change', resetErrorField);
        elem.addEventListener('keyup', resetErrorField);
    });
    document.getElementById("phone-input").addEventListener('blur', function () {
        validatePhoneField();
    });
}

export {
    validateForm,
    activeFieldEventsValidator
};