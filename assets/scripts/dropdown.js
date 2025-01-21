const dropdown = document.querySelector('.menu'),
submenu = document.querySelector('.sub-menu'),
buttonClick = document.querySelector('.checkbutton'),
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    submenu.classList.toggle('show-dropdown');
    hamburger.classList.toggle('animate-button');
})