// mobile menu
let trigger = document.querySelector('#mobile-menu-trigger')
let mobileMenu = document.querySelector('#mobile-menu')
let showing = document.querySelector('#show')
let hiding = document.querySelector('#hide')
let minus = document.querySelector('#minus')


trigger.addEventListener("click", () => {
    mobileMenu.classList.toggle('-translate-x-full')
    showing.classList.toggle('hidden')
    hiding.classList.toggle('hidden')
})


