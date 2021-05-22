
const Calidra = (() => {
    const elBurger = document.querySelector('.burger');
    const elUl = document.querySelector('.nav-ul');
    const acordeonButtons = document.querySelectorAll('.acordeon-down-arrow');
    const iniciativasDer = document.querySelector('.corporativo-navegador-der');
    const iniciativasIzq = document.querySelector('.corporativo-navegador-izq');

    return{
        init: () => {
            Calidra.burgerClick();
            Calidra.accordion();
            Calidra.bulmaCarousel('.carousel', 3);
            Calidra.bulmaCarousel('.home-carousel', 2);
            iniciativasDer.onclick = () => {Calidra.iniciativasCarousel('derecha')};
            iniciativasIzq.onclick = () => {Calidra.iniciativasCarousel('izquierda')};
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
        bulmaCarousel: (clase, slides) => {
            const options = {
                slidesToShow: slides,
                pagination: false,
                infinite: true
            }
            // Initialize all elements with carousel class.
            const carousels = bulmaCarousel.attach(clase, options);
        },
        iniciativasCarousel: (lado) => {
            console.log(lado)
        }
    }  
})();
Calidra.init();