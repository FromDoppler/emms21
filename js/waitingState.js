
import {
    showSecondState
} from './statesHandler.js'

const checkEndTime = (now) => {
    if (now > localStorage.et) {
        clearInterval(refreshIntervalId);
        document.getElementById("title-second-state").innerHTML = "ya estas registrado!";
        localStorage.t="pr";
        showSecondState();
    }
}

const refreshIntervalId = setInterval( () => {
    let now = new Date;
    let distance = localStorage.et - now;
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("title-second-state").innerHTML = `En ${minutes}:${seconds} estaras registrado.`;
    checkEndTime(now);
},100);

export const waitingState = () => {
    const interval = 1000 * 60;
    localStorage.et = localStorage.et || +new Date + interval;
    refreshIntervalId;
}