// mobile menu
let trigger = document.getElementById('menu-trigger')
let mobileMenu = document.getElementById('mobile-menu')

trigger.addEventListener('click', function(e) {
    trigger.classList.toggle('cross')
    mobileMenu.classList.toggle('visible-menu')
})
