import {
    firstState
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
    postState,
    replacePostRegisteredContent,
	replacePostFooterContent
} from './postState.js'

import {
    getStatus,
    startCounter
} from './modules/eventStatus.js'

import {
 problemsState
} from './problemsState.js'

const footer = document.getElementById("footer-index");
const videoContainer = document.getElementById("video-container");

const showFirstState = async () => {
    let response = await fetch('index-first-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    await firstState();
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
    await problemsState();
}

const ShowPostState = async() => {
    let response = await fetch('index-post-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    await postState();
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

const getForceState = async() => {
    const response = await fetch('services/getForceRefresh.php');
    const data = await response.json();
    return data.forceRefresh;
}

const checkForceState = async() => {
    setInterval( async () => {
        const currentForceState = await getForceState();
        console.log(localStorage.nf);
        if (localStorage.nf < currentForceState){
            console.log("salto el checkForce");
            localStorage.nf = currentForceState;
            await statesHandler();
        }
    }, 10000);
}

const statesHandler = async () => { 
    
    localStorage.nf = await getForceState();
    await checkForceState();
		if(document.getElementById('nav-agenda') != null){
    	document.getElementById('nav-agenda').style.display = 'none';
		}
    await getStatus();
    await setTypeUser();
    await startCounter();

    if (localStorage.status === "postinicial"){
        if (localStorage.isRegistered || localStorage.t === "pr" || localStorage.t === "vr") {
            await replacePostRegisteredContent();
            await replacePostFooterContent();
        }else {
            await ShowPostState();
        }
    }
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
		if(document.getElementById('video-back') != null){
	    document.getElementById('video-back').setAttribute('src', 'img/background-home.mp4');
		}
});

export {
    showFirstState,
    showSecondState,
    showThirdState,
    statesHandler
}