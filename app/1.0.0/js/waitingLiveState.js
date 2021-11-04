const checkEndTime = (refreshIntervalId, now) => {
    if (now > localStorage.et) {
        clearInterval(refreshIntervalId);
        location.reload();
    }
}

const startCountDown = () => {
    const printSeconds = document.getElementById('seconds');
    const refreshIntervalId = setInterval(() => {
        let now = new Date;
        let distance = localStorage.et - now;
        //se agrego + 1 porque mostraba el -1
        let seconds = Math.floor((distance % (1000 * 60)) / 1000) + 1;
        //TODO los seconds vienen con un solo decimal, ver como agregar el 0 solo para los casos que tengo uno solo
        printSeconds.innerHTML=seconds;
        checkEndTime(refreshIntervalId, now);
    }, 100);
}
export const waitingLiveState = () => {
    window.scrollTo(0, 0);
    const interval = 1000 * 9;
    localStorage.et = localStorage.et || + new Date + interval;
    startCountDown();
   
}
