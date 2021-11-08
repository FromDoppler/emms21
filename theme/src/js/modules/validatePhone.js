import intlTelInput from 'intl-tel-input';

const setErrorField = (errorCode) => {

    const errorMap = [
        '¡Ouch! Escribe un teléfono válido.',
        '¡Ouch! Escribe un código de area válido.',
        '¡Ouch! El número de teléfono es demasiado corto.',
        '¡Ouch! El número de teléfono es demasiado largo.',
        '¡Ouch! Escribe un teléfono válido.',
        '¡Ouch! Ingresa solo valores numéricos.',
    ];

    const holderPhone = document.getElementById("holder-phone");
    holderPhone.setAttribute('data-error', errorMap[errorCode]);
    holderPhone.classList.add("error");
}
const createPhoneField = () => {
    const phoneInputField = document.getElementById("phone-input");

    return intlTelInput(phoneInputField, {
        utilsScript: "./js/modules/intlTelInput/util.js",
        separateDialCode: true,
        initialCountry: 'auto',
        hiddenInput: 'full-phone-input',
        geoIpLookup: function (callback) {
            fetch('https://ipinfo.io')
                .then(data => {
                    const countryCode = data && data.country ? data.country : 'AR';
                    callback(countryCode);
                })
        }
    });
}
const validatePhoneField = (phoneInput) => {
    const phoneInputField = document.getElementById("phone-input");
    const numberRegex = new RegExp('^[0-9]*$');

    if (phoneInputField.value.trim()) {
        if (!phoneInputField.value.trim().match(numberRegex)) {
            setErrorField(5);
            return false;
        }
        if (!phoneInput.isValidNumber()) {
            const errorCode = phoneInput.getValidationError();
            setErrorField(errorCode);
            return false;
        }
        return true;
    }
}

export {
    createPhoneField,
    validatePhoneField
};