let mobileForm = document.querySelector('#mobile-form-container #wpforms-1008')
let mobileParagraph = document.querySelector('#mobile-form-paragraph')
let mobileContainer = document.querySelector('#mobile-form-container h2')

document.addEventListener("DOMContentLoaded", function(){
    mobileForm.classList.add('hidden')
});


mobileContainer.addEventListener("click", () => {
    // mobileForm.classList.toggle('flex')
    // mobileForm.classList.toggle('hidden')
    mobileForm.classList.toggle('hidden')
    mobileParagraph.classList.toggle('hidden')
    minus.classList.toggle('hidden')

})



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


