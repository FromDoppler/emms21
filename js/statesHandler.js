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

const showFirstState = async () => {
    let response = await fetch('index-first-state.php');
    document.getElementById('current-state').innerHTML = await response.text();
    fistState();
}

const showSecondState = async () => {
		const footer = document.getElementById('footer-index');
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

document.addEventListener("DOMContentLoaded", () => {
    setTypeUser();
    if (localStorage.invited)
        showThirdState();
    else if (localStorage.isRegistered || localStorage.t ==="pr")
        showSecondState();
    else
        showFirstState();
});
export {
    showFirstState,
    showSecondState,
    showThirdState
}