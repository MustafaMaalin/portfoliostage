
const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLink = document.getElementsByClassName('menu-container')[0];
const container = document.querySelector('body');


toggleButton.addEventListener('click', function(e){
    e.preventDefault();
    toggleButton.classList.toggle('active');
    navbarLink.classList.toggle('active');
    container.classList.toggle('menu-open');

})

