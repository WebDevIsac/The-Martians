

// function to toggle class for the mobile menu

document.getElementById("burgerIcon").addEventListener("click",  () => {

  document.getElementById("burgerIcon").classList.toggle("transform");

  document.getElementById("mobileMenu").classList.toggle("toggle");

});




// Variables for image slide
let sliderImages = document.querySelectorAll('.slide');
let buttons = document.querySelector('.buttons');
let allButtons = document.querySelectorAll('.buttons > div');
let current = 0;

// Clear all images
function reset () {
  // For mobile
  if (window.innerWidth < 900) {
    for (let i = 0; i < sliderImages.length; i++) {
      allButtons[i].classList.remove('active-button');
      sliderImages[i].classList.remove('active-image');
    }
  }
  // For desktop
  else if (window.innerWidth >= 900) {
    for (let i = 0; i < sliderImages.length; i++) {
      allButtons[i].classList.remove('active-button');
    }
  }
}

// Show first image after reload
function startSlide () {
  // For mobile
  if (window.innerWidth < 900) {
    reset();
    allButtons[0].classList.add('active-button');
    sliderImages[0].classList.add('active-image');
    current = 0;
  }
  // For desktop
  else if (window.innerWidth >= 900) {
    reset();
    allButtons[0].classList.add('active-button');
  }
}

// Show first image after click
allButtons[0].addEventListener('click', () => {
  // For mobile
  if (window.innerWidth < 900) {
    if (current !== 0) {
      reset();
      allButtons[0].classList.add('active-button');
      sliderImages[0].classList.add('active-image');
      current = 0;
    }
  }
  // For desktop
  else if (window.innerWidth >= 900) {
    reset();
    allButtons[0].classList.add('active-button');
    window.location = '#image1';
  }
});

// Show second image after click
allButtons[1].addEventListener('click', () => {
  // For mobile
  if (window.innerWidth < 900) {
    if (current !== 1) {
      reset();
      allButtons[1].classList.add('active-button');
      sliderImages[1].classList.add('active-image');
      current = 1;
    }
  }
  // For desktop
  else if (window.innerWidth >= 900) {
    reset();
    allButtons[1].classList.add('active-button');
    window.location = '#image2';
  }
});


// Show third image after click
allButtons[2].addEventListener('click', () => {
  // For mobile
  if (window.innerWidth < 900) {
    if (current !== 2) {
      reset();
      allButtons[2].classList.add('active-button');
      sliderImages[2].classList.add('active-image');
      current = 2;
    }
  }
  // For desktop
  else if (window.innerWidth >= 900) {
    reset();
    allButtons[2].classList.add('active-button');
    window.location = '#image3';
  }
});




startSlide();
