import {
    statesHandler
} from './../statesHandler.js'

export const getStatus = async () => {
    let response = await fetch('services/getEstado.php');
    let data = await response.json();
    localStorage.status = data.eventStatus;
    response = await fetch('services/getCounterDates.php');
    data = await response.json();
    localStorage.endTimePre = new Date(data.endTimePre).getTime();
    localStorage.endTimeDuring = new Date( data.endTimeDuring).getTime();    
}

const checkEndTime = (refreshIntervalId, endTime) => {
    let now = new Date();
    now = now.toLocaleString('en-US', { timeZone: 'America/Argentina/Buenos_Aires' });
    now =  new Date(now).getTime();
    if (endTime < now) {
        clearInterval(refreshIntervalId);
        statesHandler();
    }
}

const startCountDown = (endTime) => {
    const refreshIntervalId = setInterval(() => {
        checkEndTime(refreshIntervalId, endTime);
    }, 100);
}

export const startCounter = async () => {
    if (localStorage.status === "preevento")
        startCountDown(localStorage.endTimePre)
    else if (localStorage.status === "during")
        startCountDown(localStorage.endTimeDuring)
}
