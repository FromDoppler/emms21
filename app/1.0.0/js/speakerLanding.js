import {
    carousel
} from './modules/carousel.js'

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
		medium_utm: urlParams.get("utm_medium"),
		es_visitante: (localStorage.t === "v") ? 1 : 0
	}
	await fetch('services/registrarEmms.php', {
		method: 'POST',
		body: JSON.stringify(data),
	});
	localStorage.isRegistered = data.email;
	localStorage.t = "pr";
}

const validateForm = (phoneInput) => {
	const requiredFields = document.querySelectorAll("input.required,select.required");
	const checkboxPolicyField = document.getElementById("acepto-politicas");
	const emailField = document.getElementById("email");

	const hasRequiredsValidate = validateEmptyFields(requiredFields);
	const hasEmailValidate = validateEmailField(emailField);
	const hasPolicyValidate = validatePolicyCheckbox(checkboxPolicyField);
	const hasPhoneValidate = validatePhoneField(phoneInput);

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
const urlVideo = async (speaker) => {
    console.log(speaker)
    const response = await fetch('services/getSpeakerUrl.php', {
        method: 'POST',
        body: JSON.stringify({speaker}),
    });
    let data = await response.json();
    console.log('speakerUrl',data.url)
    return data.url;
}

const showVideo = async () => {
	const titleCheker = document.getElementById("title-checker");
	titleCheker.classList.remove("title-checker");
	document.getElementById("currentState").classList.remove("form--state");
    const cs = document.getElementById("currentState")
    const speaker = cs.getAttribute('speaker');
    const youtubeLink= await urlVideo(speaker);
    cs.innerHTML = `<iframe width="100%" height="100%" src=${youtubeLink} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
}

const showForm = async () => {
	const titleCheker = document.getElementById("title-checker");
	titleCheker.classList.add("title-checker");
	document.getElementById("currentState").classList.add("form--state");
    let response = await fetch('post-speaker-form.php');
    document.getElementById('currentState').innerHTML = await response.text();
    await form();
}

const form = async () => {
    const phoneInput = createPhoneField();
    activeFieldEventsValidator(phoneInput);
    const buttonSubmitFirstState = document.getElementById("register-button");
    buttonSubmitFirstState.addEventListener("click", async () => {

        //TODO dinamizar country    
        if (validateForm(phoneInput)) {
            spinner(buttonSubmitFirstState);
            await fetchRegistrarEmms();
            await showVideo();
        } else {
            document.getElementById('firstname').focus();
        }
    });  
}

export const speakerLanding = async () => {
	if (localStorage.status === 'postinicial') {
        if (localStorage.t !=="vr" && localStorage.t !== "pr") {
            await showForm();
        }else{
            await showVideo();
        }
        
    }else {
        document.location.href="/";
    }
}

document.addEventListener('DOMContentLoaded', async () => {
    await carousel();
    await speakerLanding();
})