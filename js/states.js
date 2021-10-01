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
    let response = await fetch('index-second-state.php');
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

document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem('invited'))
        showThirdState();
    else if (localStorage.getItem('isRegistered'))
        showSecondState();
    else
        showFirstState();
});
export { showFirstState, showSecondState, showThirdState }