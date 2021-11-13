import { firstState } from './firstState.js';
import { carousel } from './modules/carousel.js';

const changeButton = async () => {
    const footerPost = document.getElementById("footer-index-post");
    footer.style.display = 'none';
    footerPost.style.display = 'block';
}

export const replacePostRegisteredContent = async () => {
    let response = await fetch('index-post-registered.php');
    document.getElementById('current-state').innerHTML = await response.text();
    document.getElementById('nav-agenda').style.display = 'none';
    await carousel();
}

export const replacePostFooterContent = async () => {
    let response = await fetch('index-post-footer.php');
    document.getElementById('replace-post').innerHTML = await response.text();
}

export const postState = async () => {
    const scheduleContainer = document.getElementById("schedule-event");
    scheduleContainer.classList.add("schedule-post");

    const videoContainer = document.getElementById("video-container");
    videoContainer.classList.add("video-off-post");
    await firstState()
    await changeButton();
}