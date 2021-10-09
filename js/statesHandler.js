import {
    fistState
} from './firstState.js'

import {
    secondState
} from './secondState.js'

import {
    thirdState
} from './thirdState.js'

const showFirstState = async () => {
    let response = await fetch('index-first-state.php');
    window.scrollTo(0, 0);
    document.getElementById('current-state').innerHTML = await response.text();
    fistState();
}

const showSecondState = async () => {
    if (localStorage.t==="vr") {
        var response = await fetch('waiting-list.php');
    }else{
        var response = await fetch('index-second-state.php');
    }
    window.scrollTo(0, 0);
    document.getElementById('current-state').innerHTML = await response.text();
    secondState();
}

const showThirdState = async () => {
    let response = await fetch('index-third-state.php');
    window.scrollTo(0, 0);
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