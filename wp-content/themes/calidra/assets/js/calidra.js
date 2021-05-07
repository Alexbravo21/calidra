
const Calidra = (() => {
    const elBurger = document.querySelector('.burger');
    const elUl = document.querySelector('.nav-ul');
    const acordeonButtons = document.querySelectorAll('.acordeon-down-arrow');

    return{
        init: () => {
            Calidra.burgerClick();
            Calidra.accordion();
            Calidra.bulmaCarousel();
        },
        burgerClick: () => {
            elBurger.onclick = () => {
                elBurger.classList.toggle('open');
                elUl.classList.toggle('open');
            }
        },
        accordion: () => {
            for (var i = 0; i < acordeonButtons.length; i++){
                acordeonButtons[i].onclick = (e) => {
                    e.stopPropagation();
                    if(e.target.className === 'acordeon-down-arrow'){
                        e.path[3].childNodes[3].classList.toggle('is-active');
                        e.target.children[0].classList.toggle('is-active');
                    }else{
                        e.path[4].childNodes[3].classList.toggle('is-active');
                        e.target.classList.toggle('is-active');
                    }
                }
            }
        },
        bulmaCarousel: () => {
            const options = {
                slidesToShow: 3,
                pagination: false,
                infinite: true
            }
            // Initialize all elements with carousel class.
            const carousels = bulmaCarousel.attach('.carousel', options);
        }
    }  
})();
Calidra.init();