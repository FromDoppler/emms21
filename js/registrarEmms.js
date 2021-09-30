"use strict";
import {
    validateForm,
    activeFieldEventsValidator
} from './validateForm.js'

import { invitarContactos  } from './invitarContactos.js';

const showSecondState = async () => {
    let response = await fetch('index-second-state.php');
    window.scrollTo(0, 0);
    document.getElementById('current-state').innerHTML = await response.text();
    invitarContactos();
}

const fetchRegistrarEmms = async () => {
    const data = {
        firstname: document.getElementById("firstname").value,
        lastname: document.getElementById("lastname").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone-input").value,
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
    return response.json();
}

document.addEventListener("DOMContentLoaded", () => {

    activeFieldEventsValidator();
    const buttonSubmitFirstState = document.getElementById("register-button");
    buttonSubmitFirstState.addEventListener("click", async () => {
        //TODO dinamizar country       
        if (validateForm()) {
            await fetchRegistrarEmms();
            await showSecondState();
        }
    });
    
});