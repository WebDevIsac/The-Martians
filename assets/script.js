

// function to toggle class for the hamburger menu

document.getElementById("burgerIcon").addEventListener("click", () => {

  document.getElementById("burgerIcon").classList.toggle("transform");

  document.getElementById("burgerMenu").classList.toggle("slide");

});





const container = document.querySelector('.container');
const buttonsContainer = document.querySelector('.buttons');
const buttons = document.querySelectorAll('.buttons > div');
const btn1 = document.querySelector('.btn1');
const btn2 = document.querySelector('.btn2');
const btn3 = document.querySelector('.btn3');
const activeBtn = document.querySelector('.active');


for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        let currentBtn = buttons[i];
        let newIndex = i + 1;
        let currentImg = 'imgSlide' + newIndex;

        container.setAttribute('id', currentImg);
        currentBtn.setAttribute('id', 'active');


        if (btn1 !== currentBtn) {
            btn1.removeAttribute('id', 'active');
            if (btn2 !== currentBtn) {
                btn2.removeAttribute('id', 'active');
            } else {
                btn3.removeAttribute('id', 'active');
            }

        } else if (btn2 !== currentBtn) {
            btn2.removeAttribute('id', 'active');
            if (btn3 !== currentBtn) {
                btn3.removeAttribute('id', 'active');
            }
        }
    });
}
