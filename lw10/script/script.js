const btnView = document.querySelectorAll('.button-register');
const btnHidden = document.querySelectorAll('.hidden');

const bk = document.querySelector('.bkb');
const popup = document.querySelector('.popup');


btnView.forEach((el) => {
    el.addEventListener('click', () => {
        let id = requestAnimationFrame(popupView);
        cancelAnimationFrame(id);
        return requestAnimationFrame(popupView);
    })
});

btnHidden.forEach((el) => {
    el.addEventListener('click', () => {
        let id = requestAnimationFrame(popupHidden);
        cancelAnimationFrame(id);
        return requestAnimationFrame(popupHidden);
    })
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