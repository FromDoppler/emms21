import {
    fistState
} from './firstState.js'

const changeButton = () => {
    const footerPost = document.getElementById("footer-index-post");
    footer.style.display = 'none';
    footerPost.style.display = 'block';
}

export const postState = async() => {
    await fistState();
    changeButton();
}