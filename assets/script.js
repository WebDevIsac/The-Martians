

// function to toggle class for the mobileMenu menu

document.getElementById("burgerIcon").addEventListener("click",  () => {

  document.getElementById("burgerIcon").classList.toggle("transform");

  document.getElementById("mobileMenu").classList.toggle("slide");

});






// Variables for body
let sliderImages = document.querySelectorAll('.slide');
let buttons = document.querySelector('.buttons');
let allButtons = document.querySelectorAll('.buttons > div');
let current = 0;

// For mobile view

// Clear all images
function reset () {
  for (let i = 0; i < sliderImages.length; i++) {
    // sliderImages[i].style.display = 'none';
    sliderImages[i].style.position = 'absolute';
    sliderImages[i].style.opacity = 0;
    allButtons[i].classList.remove('active');
  }
}

// Show first slide after reload
function startPhoneSlide () {
  reset();
  // sliderImages[0].style.display = 'block';
  sliderImages[0].style.position = 'static';
  sliderImages[0].style.opacity = 1;
  allButtons[0].classList.add('active');
  current = 0;
}

// Show first after click
allButtons[0].addEventListener('click', () => {
  if (current !== 0) {
    reset();
    // sliderImages[0].style.display = 'block';
    sliderImages[0].style.opacity = 1;
    sliderImages[0].style.position = 'static';
    allButtons[0].classList.add('active');
    current = 0;
  }
});

// Show second after click
allButtons[1].addEventListener('click', () => {
  if (current !== 1) {
    reset();
    // sliderImages[1].style.display = 'block';
    sliderImages[1].style.opacity = 1;
    sliderImages[1].style.position = 'static';
    allButtons[1].classList.add('active');
    current = 1;
  }
});


// Show third after click
allButtons[2].addEventListener('click', () => {
  if (current !== 2) {
    reset();
    // sliderImages[2].style.display = 'block';
    sliderImages[2].style.opacity = 1;
    sliderImages[2].style.position = 'static';
    allButtons[2].classList.add('active');
    // allButtons[2].setAttribute('id', 'active');
    current = 2;
  }
});






// // For desktop view 

// function resetDesktop () {
//   for (let i = 0; i < sliderImages.length; i++) {
//     // sliderImages[i].style.display = 'none';
//     allButtons[i].classList.remove('active');
//   }
// }

// // Show first slide after reload
// function startDesktopSlide () {
//   resetDesktop();
//   // sliderImages[0].style.display = 'block';
//   allButtons[0].classList.add('active');
//   current = 0;
// }

// // Show first after click
// allButtons[0].addEventListener('click', () => {
//   if (current !== 0) {
//     resetDesktop();
//     // sliderImages[0].style.display = 'block';
//     allButtons[0].classList.add('active');
//     current = 0;
//   }
// });

// // Show second after click
// allButtons[1].addEventListener('click', () => {
//   if (current !== 1) {
//     resetDesktop();
//     // sliderImages[1].style.display = 'block';
//     allButtons[1].classList.add('active');
//     current = 1;
//   }
// });


// // Show third after click
// allButtons[2].addEventListener('click', () => {
//   if (current !== 2) {
//     resetDesktop();
//     // sliderImages[2].style.display = 'block';
//     allButtons[2].classList.add('active');
//     // allButtons[2].setAttribute('id', 'active');
//     current = 2;
//   }
// });






// Checking window width size
if (window.innerWidth < 900) {
  // Calling function to start slide for mobile
  startPhoneSlide();
} else if (window.innerWidth >= 900) {
  // Calling function to start slide for desktop
  startDesktopSlide();
}

