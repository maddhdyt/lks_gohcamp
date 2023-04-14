const navMenu = document.querySelector('.nav-menu');
const navToggle = document.querySelector('.nav-toggle');
const logo = document.querySelector('.logo');

navToggle.addEventListener ("click", function () {
  navMenu.classList.toggle("show-nav");
  navToggle.classList.toggle("toggle-active");
  logo.classList.toggle("text-dark");

});

window.onscroll = function () {
    const header = document.querySelector('nav');
    const fixedNav = header.offsetTop;
  
    if (window.pageYOffset > fixedNav) {
      header.classList.add("white-navbar")
    } else {
      header.classList.remove("white-navbar")
    }
  }