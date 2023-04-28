//scroll attikca navbari degistirme

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 100) 
})

//tiklayinca cevap goruntuler

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {

    faq.addEventListener('click', () => {
        faq.classList.toggle('open');


        //ikon degistirme
        const icon = faq.querySelector ('.faq__icon i');
        if(icon.className === 'uil uil-plus') {
            icon.className =   "uil uil-minus";

        } else {

            icon.className =   "uil uil-plus";


        }

    })
    
})

//navbar gizleyip acma
const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";

})

//navbar kapatma

    const closeNav = () => { 
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)