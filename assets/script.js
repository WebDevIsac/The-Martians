
'use strict';

// ScrollSpy function

(function() {


	let section = document.querySelectorAll(".section");
	let sections = {};
	let i = 0;

	Array.prototype.forEach.call(section, function(e) {
		sections[e.id] = e.offsetTop;
	});

	window.onscroll = function() {
		let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

		for (i in sections) {
			if (sections[i] <= scrollPosition) {
				document.querySelector('.active').setAttribute('class', ' ');
				document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
			}
		}

	};
})();

// Function to toggle class for the mobile menu

	document.getElementById("burger-icon").addEventListener("click", () => {

	document.getElementById("burger-icon").classList.toggle("transform");

	document.getElementById("mobile-menu").classList.toggle("toggle");

});


// Function for smooth scrolling

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();

		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});


// Variables for image slide
const homeBtn = document.querySelector('.logo-wrapper');
const emailBtn = document.querySelector('.email-mobile');
const catalogueBtn = document.querySelector('.catalogue-mobile');
const sliderImages = document.querySelectorAll('.slide');
const allButtons = document.querySelectorAll('.buttons > a');

let current = 0;

// Clear all images
function reset () {
	for (let i = 0; i < sliderImages.length; i++) {
		allButtons[i].classList.remove('active-button');
		sliderImages[i].classList.remove('active-image');
	}
}

// Show first image after reload
function startSlide () {
	reset();
	current = 0;
	home();
}

// Click event for slide
homeBtn.addEventListener('click', home);
emailBtn.addEventListener('click', email);
catalogueBtn.addEventListener('click', catalogue);

allButtons[0].addEventListener('click', home);
allButtons[1].addEventListener('click', email);
allButtons[2].addEventListener('click', catalogue);

function home () {
	if (current !== 1) {
		reset();
		allButtons[0].classList.add('active-button');
		sliderImages[0].classList.add('active-image');
		current = 1;
	}
}

// Show second image after click¨
function email () {
	if (current !== 2) {
		reset();
		allButtons[1].classList.add('active-button');
		sliderImages[1].classList.add('active-image');
		current = 2;
	}
}


// Show third image after click
function catalogue () {
	if (current !== 3) {
		reset();
		allButtons[2].classList.add('active-button');
		sliderImages[2].classList.add('active-image');
		current = 3;
	}
}

startSlide();
