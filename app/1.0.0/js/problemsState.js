import {
	statesHandler
} from './statesHandler.js'

import {
    getStatus
} from './modules/eventStatus.js'

export const problemsState = async() => {
    const refreshIntervalId = setInterval( async () => {
        await getStatus();
        console.log("localStorageStatus",localStorage.status);
        if (localStorage.status != "problems"){
            clearInterval(refreshIntervalId);
            await statesHandler();
        }
    }, 10000);
}