"use strict";
document.addEventListener("DOMContentLoaded", () => {
    var errorMap = [
        '¡Ouch! Escribe un teléfono válido.',
        '¡Ouch! Escribe un código de area válido.',
        '¡Ouch! El número de teléfono es demasiado corto.',
        '¡Ouch! El número de teléfono es demasiado largo.',
        '¡Ouch! Escribe un teléfono válido.',
    ];

    const phoneInputField = document.getElementById("phone-input");

    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "./js/modules/intlTelInput/util.js",
        separateDialCode: true,
        initialCountry: 'auto',
        hiddenInput: 'full-phone-input',
        geoIpLookup: function (callback) {
            fetch('https://ipinfo.io')
            .then(data => {
                const countryCode = data && data.country ? data.country : 'AR';
                console.log(countryCode);
                callback(countryCode);
            })
        }
    });

    var reset = function() {
        document.getElementById("holder-phone").classList.remove("error");
        
    };

    // on blur: validate
    phoneInputField.addEventListener('blur', function() {
    reset();
    if (phoneInputField.value.trim()) {
        if (!phoneInput.isValidNumber()) {
            const errorCode = phoneInput.getValidationError();
            const holderPhone = document.getElementById("holder-phone");
            holderPhone.setAttribute('data-error', errorMap[errorCode]);
            holderPhone.classList.add("error");
        }
    }
    });

    // on keyup / change flag: reset
    phoneInputField.addEventListener('change', reset);
    phoneInputField.addEventListener('keyup', reset);
});