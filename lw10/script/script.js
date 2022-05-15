const View = document.querySelectorAll('.button-register');
const Hidden = document.querySelectorAll('.hidden');

const bk = document.querySelector('.blackout');
const popup = document.querySelector('.popup');


View.forEach((el) => {
    el.addEventListener('click', () => {
        return requestAnimationFrame(popupView);
    })
});

Hidden.forEach((el) => {
    el.addEventListener('click', () => {
        return requestAnimationFrame(popupHidden);
    })
});

document.onkeydown = ((key) => {
    if (key.code == "Escape") popupHidden();
});

function popupView() {
    popup.classList.add('popup-block_visible');
    bk.classList.add('background-blackout_visible');
    popup.classList.remove('popup-block_hidden');
    bk.classList.remove('background-blackout_hidden');
}

function popupHidden() {
    popup.classList.add('popup-block_hidden');
    bk.classList.add('background-blackout_hidden');
    popup.classList.remove('popup-block_visible');
    bk.classList.remove('background-blackout_visible');
}