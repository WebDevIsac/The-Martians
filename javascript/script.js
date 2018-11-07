



const container = document.querySelector('.container');
const buttonsContainer = document.querySelector('.buttons');
const buttons = document.querySelectorAll('.buttons > div');
const btn1 = document.querySelector('.btn1');
const btn2 = document.querySelector('.btn2');
const btn3 = document.querySelector('.btn3');
const activeBtn = document.querySelector('.active');


for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", () => {
        console.log(buttons[i]); 
    });
}

