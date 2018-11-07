

// function to toggle class for the hamburger menu

document.getElementById("burgerIcon").addEventListener("click", () => {

  document.getElementById("burgerIcon").classList.toggle("transform");

  document.getElementById("burgerMenu").classList.toggle("slide");

});
