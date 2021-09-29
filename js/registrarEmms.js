"use strict";
import {
    validateForm,
    activeFieldEventsValidator
} from './validateForm.js'

document.addEventListener("DOMContentLoaded", () => {

    activeFieldEventsValidator();
    const buttonSubmit = document.getElementById("register-button");
    buttonSubmit.addEventListener("click", () => {
        //TODO dinamizar country
        if (validateForm()) {
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
            fetch('services/registrarEmms.php', {
                    method: 'POST',
                    body: JSON.stringify(data),
                })
                .then(response => {
                    response.json()
                        .then(function (response) {
                            localStorage.setItem('isRegistered', data.email);
                            //TODO 
                            //show invitation form
                            //show success registered
                            //show response message error
                        });
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    });
});