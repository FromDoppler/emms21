
import {
    showSecondState
} from './statesHandler.js'

const checkEndTime = (refreshIntervalId, now) => {
    if (now > localStorage.et) {
        clearInterval(refreshIntervalId);
        localStorage.t = "pr";
        showSecondState();
    }
}

const startCountDown = () => {
    const refreshIntervalId = setInterval(() => {
        let now = new Date;
        //let distance = localStorage.et - now;
        //let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //let seconds = Math.floor((distance % (1000 * 60)) / 1000);
        checkEndTime(refreshIntervalId, now);
    }, 100);
}
export const waitingState = () => {
    window.scrollTo(0, 0);
    const interval = 1000 * 60 * 60;
    localStorage.et = localStorage.et || + new Date + interval;
    startCountDown();
}

