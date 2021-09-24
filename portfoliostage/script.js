const menuIcon = document.querySelector (".hamburger-menu");
const navbar = document.querySelector('.navbar');
const container = document.querySelector('body');

menuIcon.addEventListener('click' , () => {
  navbar.classList.toggle('change');
  container.classList.toggle('menu-open');
});



// .active .bar-1 {
//     transform: rotateZ(-405deg) translate(-8px, 7px);
//   }

//   .active .bar-2 {
//     opacity: 0;
//   }

//   .active .bar-3 {
//     transform: rotateZ(405deg) translate(-8px, -8.5px);
//   }