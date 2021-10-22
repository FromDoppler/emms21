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
    Router
} from './Router.js'

const footer = document.getElementById('footer-index');


const showFirstState = async () => {
    let response = await fetch('index-first-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    fistState();
}

const showSecondState = async () => {
    if (localStorage.t==="vr") {
        var response = await fetch('waiting-list.php');
        document.getElementById('current-state').innerHTML = await response.text();
        waitingState();
    }else{
        var response = await fetch('index-second-state.php');
        document.getElementById('current-state').innerHTML = await response.text();
        secondState();
    }
		footer.style.display= 'none';
}

const showThirdState = async () => {
    let response = await fetch('index-third-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    thirdState();
		footer.style.display= 'none';
}

const setTypeUser = () => {
    if (!localStorage.t) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        if (["p", "pr"].includes(urlParams.get("t"))) 
            localStorage.t = urlParams.get("t");
        else
            localStorage.t = "v";
    }
}


export const registro = () => {
    setTypeUser();
    if (localStorage.invited)
        showThirdState();
    else if (localStorage.isRegistered || localStorage.t ==="pr")
        showSecondState();
    else
        showFirstState();
}
window.addEventListener('hashchange', Router);
//window.addEventListener('load', Router);

document.addEventListener("DOMContentLoaded", () => {
    Router();
	document.getElementById('video-back').setAttribute('src', 'img/background-home.mp4');
	
});

export {
    showFirstState,
    showSecondState,
    showThirdState
}