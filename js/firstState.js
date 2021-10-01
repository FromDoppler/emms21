import {
    validateForm,
    activeFieldEventsValidator
} from './validateForm.js'
import {
    showSecondState
} from './states.js'

const fetchRegistrarEmms = async () => {
    const dialCode = document.getElementsByClassName('iti__selected-dial-code')[0].innerHTML;
    const data = {
        firstname: document.getElementById("firstname").value,
        lastname: document.getElementById("lastname").value,
        email: document.getElementById("email").value,
        phone: `${dialCode}${document.getElementById("phone-input").value}`,
        company: document.getElementById("company-input").value,
        country: "Argentina",
        privacy: document.getElementById("acepto-politicas").checked,
        promotions: document.getElementById("acepto-promociones").checked
    }
    const response = await fetch('services/registrarEmms.php', {
        method: 'POST',
        body: JSON.stringify(data),
    });
    localStorage.setItem('isRegistered', data.email);
}

export const fistState = () => {
    activeFieldEventsValidator();
    const buttonSubmitFirstState = document.getElementById("register-button");
    buttonSubmitFirstState.addEventListener("click", async () => {
        //TODO dinamizar country    
        if (validateForm()) {
            await fetchRegistrarEmms();
            await showSecondState();
        }
    });
}