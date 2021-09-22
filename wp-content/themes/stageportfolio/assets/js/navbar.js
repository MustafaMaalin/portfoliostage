
const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLink = document.getElementsByClassName('menu-container')[0];

toggleButton.addEventListener('click', function(e){
    e.preventDefault();
    navbarLink.classList.toggle('active');
})
