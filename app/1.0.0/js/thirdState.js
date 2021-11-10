import {
    countDown
} from './modules/timer.js';

export const thirdState = async () => {
		if (window.location.hash!=="#agenda")
            window.scrollTo(0, 0);
    countDown();
}