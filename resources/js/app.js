import './bootstrap';

const button = document.getElementById("backToTop");

window.addEventListener("scroll", () => {

    if(window.scrollY > 500){

        button.classList.remove("opacity-0","translate-y-4");

    }else{

        button.classList.add("opacity-0","translate-y-4");

    }

});

button.addEventListener("click", () => {

    window.scrollTo({

        top:0,
        behavior:"smooth"

    });

});


const btn = document.getElementById('menuBtn')
const menu = document.getElementById('mobileMenu')

btn.addEventListener('click', () => {

    menu.classList.toggle('hidden')

})
