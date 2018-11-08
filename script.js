


let sliderImages = document.querySelectorAll('.slide');
let buttons = document.querySelector('.buttons');
let allButtons = document.querySelectorAll('.buttons > div');
let current = 0;

// Clear all images
function reset () {
    for (let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = 'none';
        allButtons[i].removeAttribute('id', 'active');
    }
    buttons.style.display = 'none';
}

// Show first slide after reload
function startSlide () {
        reset();
        sliderImages[0].style.display = 'block';
        allButtons[0].setAttribute('id', 'active');
        buttons.style.display = 'flex';
        current = 0;
}

// Show first after click
allButtons[0].addEventListener('click', () => {
    if (current !== 0) {
        reset();
        sliderImages[0].style.display = 'block';
        allButtons[0].setAttribute('id', 'active');
        buttons.style.display = 'flex';
        current = 0;
    }
});

// Show second after click
allButtons[1].addEventListener('click', () => {
    if (current !== 1) {
        reset();
        sliderImages[1].style.display = 'block';
        allButtons[1].setAttribute('id', 'active');
        buttons.style.display = 'flex';
        current = 1;
    }    
});


// Show third after click
allButtons[2].addEventListener('click', () => {
    if (current !== 2) {
        reset();
        sliderImages[2].style.display = 'block';
        allButtons[2].setAttribute('id', 'active');
        buttons.style.display = 'flex';
        current = 2;
    }
});

// Calling function to start slide
startSlide();
