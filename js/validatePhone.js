const setErrorField = (errorCode) => {

    const errorMap = [
        '¡Ouch! Escribe un teléfono válido.',
        '¡Ouch! Escribe un código de area válido.',
        '¡Ouch! El número de teléfono es demasiado corto.',
        '¡Ouch! El número de teléfono es demasiado largo.',
        '¡Ouch! Escribe un teléfono válido.',
    ];

    const holderPhone = document.getElementById("holder-phone");
    holderPhone.setAttribute('data-error', errorMap[errorCode]);
    holderPhone.classList.add("error");
}

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

const validatePhoneField = () => {
    if (phoneInputField.value.trim()) {
        if (!phoneInput.isValidNumber()) {
            const errorCode = phoneInput.getValidationError();
            setErrorField(errorCode);
        }
    }
}

export {
    validatePhoneField
};