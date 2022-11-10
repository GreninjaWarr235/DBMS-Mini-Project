const navigationHeight = document.querySelector('.header').offsetHeight;

document.documentElement.style.setProperty('--scroll-padding', navigationHeight - 2 + "px");