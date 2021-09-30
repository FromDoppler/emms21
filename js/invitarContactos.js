import {
    countDown
} from './timer.js';


const showThirdState = async () => {
    let response = await fetch('index-third-state.php');
    window.scrollTo(0, 0);
    document.getElementById('current-state').innerHTML = await response.text();
}

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

export const invitarContactos = () => {

    countDown();
    const buttonSubmitSecondState = document.getElementById("register-button-second-state");
    buttonSubmitSecondState.addEventListener("click", async () => {
        //TODO dinamizar country       
        //await fetchInvitarContactos();
        await showThirdState();
    });
}