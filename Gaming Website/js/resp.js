const burger = document.querySelector('.burger');
const mid = document.querySelector('.mid');
const navbar = document.querySelector('.navbar');
const rightNav = document.querySelector('.rightNav');


// burger.addEventListener('click', () => {
//     rightNav.classList.toggle('v-class-resp');
//     navbar.classList.toggle('v-class-resp');
//     mid.classList.toggle('h-nav-resp');
// })

burger.onclick = function () {
    rightNav.classList.toggle('v-class-resp');
    navbar.classList.toggle('v-class-resp');
    mid.classList.toggle('h-nav-resp');
}
