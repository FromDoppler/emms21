import {
    countDown
} from './modules/timer.js';

import {
    showThirdState
} from './statesHandler.js'

const fetchInvitarContactos = async () => {
    const data = {
        email1: document.getElementById("email1").value,
        email2: document.getElementById("email2").value,
    }
    const response = await fetch('services/invitarContactos.php', {
        method: 'POST',
        body: JSON.stringify(data),
    });
    localStorage.setItem('invited', true);
    return response.json();
}

export const secondState = () => {
    countDown();
    const buttonSubmitSecondState = document.getElementById("register-button-second-state");
    buttonSubmitSecondState.addEventListener("click", async () => {
        //TODO dinamizar country       
        //await fetchInvitarContactos();
        await showThirdState();
    });
}