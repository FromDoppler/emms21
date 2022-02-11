import { firstState } from './firstState.js';
import { carousel } from './modules/carousel.js';

const changeButton = async () => {
    const footerPost = document.getElementById("footer-index-post");
		if(footerPost != null){
    	footerPost.style.display = 'block';
		}
}

export const replacePostRegisteredContent = async () => {
    let response = await fetch('index-post-registered.php');
		if(document.getElementById('current-state') != null){
    	document.getElementById('current-state').innerHTML = await response.text();
		}
		if(document.getElementById('nav-agenda')!= null){
    	document.getElementById('nav-agenda').style.display = 'none';
		}
    await carousel();
}

export const replacePostFooterContent = async () => {
    let response = await fetch('index-post-footer.php');
		if(document.getElementById('replace-post')!= null){
    	document.getElementById('replace-post').innerHTML = await response.text();
		}
}

export const postState = async () => {
    const scheduleContainer = document.getElementById("schedule-event");
    scheduleContainer.classList.add("schedule-post");

    const videoContainer = document.getElementById("video-container");
    videoContainer.classList.add("video-off-post");
    await firstState()
    await changeButton();
}