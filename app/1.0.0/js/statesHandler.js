import {
    fistState
} from './firstState.js'

import {
    secondState
} from './secondState.js'

import {
    thirdState
} from './thirdState.js'

import {
    waitingState
} from './waitingState.js'

import {
    waitingLiveState
} from './waitingLiveState.js'

import {
    getStatus,
    startCounter
} from './modules/eventStatus.js'


const footer = document.getElementById("footer-index");
const footerPost = document.getElementById("footer-index-post");
const videoContainer = document.getElementById("video-container");



const showFirstState = async () => {
    let response = await fetch('index-first-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    await fistState();
}

const showSecondState = async () => {

    if (localStorage.status === "during" && localStorage.t === "vr") {
        var response = await fetch('index-live-waiting-state.php');
        document.getElementById('current-state').innerHTML = await response.text();
        if (window.location.hash!=="#agenda")
        window.scrollTo(0, 0);
        //TODO: funcion encargada de ejecutar la cuenta regresiva 10 seg
        await waitingLiveState();
    }
    else if (localStorage.status === "during" && localStorage.t === "pr") {
        
        var response = await fetch('index-live-state.php');
        document.getElementById('current-state').innerHTML = await response.text();
        if (window.location.hash!=="#agenda")
        window.scrollTo(0, 0);
    }
    else if (localStorage.t === "vr") {
        var response = await fetch('waiting-list.php');
        document.getElementById('current-state').innerHTML = await response.text();
        await waitingState();
    } else {
        var response = await fetch('index-second-state.php');
        document.getElementById('current-state').innerHTML = await response.text();
        await secondState();
    }
    footer.style.display = 'none';
}

const showThirdState = async () => {
    let response = await fetch('index-third-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    await thirdState();
    footer.style.display = 'none';
}

const ShowLiveState = async () => {
    let response = await fetch('index-live-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    footer.style.display = 'none';
		videoContainer.classList.add("video-off");
}

const ShowProblemsState = async() => {
    let response = await fetch('technical-problems.php');
    document.getElementById('current-state').innerHTML = await response.text();
    footer.style.display = 'none';
}

const changeButton = () =>{
    footer.style.display = 'none';
    footerPost.style.display = 'block';
}

const ShowPostState = async() => {
    let response = await fetch('index-post-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    await fistState();
    changeButton();
}

const setTypeUser = async () => {
    if (!localStorage.t) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        if (["p", "pr"].includes(urlParams.get("t")))
            localStorage.t = urlParams.get("t");
        else
            localStorage.t = "v";
    }
}

const statesHandler = async () => { 
    await getStatus();
    await setTypeUser();
    if (localStorage.status === "postinicial")
        await ShowPostState();
    else if (localStorage.status === "problems")
        await ShowProblemsState();
    else if (localStorage.status === "during" && localStorage.isRegistered)
        await ShowLiveState();
    else if (localStorage.invited)
        await showThirdState();
    else if (localStorage.isRegistered || localStorage.t === "pr")
        await showSecondState();
    else
        await showFirstState();
}

document.addEventListener("DOMContentLoaded", async () => {
    await statesHandler();
    await startCounter();
    document.getElementById('video-back').setAttribute('src', 'img/background-home.mp4');
});

export {
    showFirstState,
    showSecondState,
    showThirdState,
    statesHandler
}