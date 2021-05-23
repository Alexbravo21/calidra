
const Calidra = (() => {
    const elBurger = document.querySelector('.burger');
    const elUl = document.querySelector('.nav-ul');
    const acordeonButtons = document.querySelectorAll('.acordeon-down-arrow');
    const iniciativasDer = document.querySelector('.corporativo-navegador-der');
    const iniciativasIzq = document.querySelector('.corporativo-navegador-izq');
    const sliderItem = document.querySelectorAll('.slider-anim');
    
    let sliderContador = 0;
    let corporativo,  prev_attr, index_attr, subtr_attr, new_attr, sumrest;
    const iniciativasContenido = [
        ['LOREM IPSUM DOLOR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'iniciativas.jpg'],
        ['HOLA CALIDRA', 'HOLA Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'responsabilidad-social.jpg'],
        ['ADIOS CALIDRA', 'ADIOS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'colabora-vacantes.jpg']
    ]

    return{
        init: () => {
            Calidra.burgerClick();
            Calidra.accordion();
            Calidra.bulmaCarousel('.carousel', 3);
            Calidra.bulmaCarousel('.home-carousel', 2);
            iniciativasDer.onclick = (e) => {e.stopPropagation(); Calidra.iniciativasCarousel('d')};
            iniciativasIzq.onclick = (e) => {e.stopPropagation(); Calidra.iniciativasCarousel('i')};
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
            sumrest = lado === 'd' ? 1 : -1;
            sliderContador = sliderContador + sumrest;
            sliderContador = sliderContador === -1 ? iniciativasContenido.length - 1 : sliderContador === iniciativasContenido.length ? 0 : sliderContador;

            for (var i =0; i < sliderItem.length; i++){
                sliderItem[i].classList.add('animado');
                let tag_type = sliderItem[i].localName === 'h3' ? 0 : sliderItem[i].localName === 'p' ? 1 : 2;
                ((i) => {setTimeout(() => {
                    if(tag_type === 2){
                        corporativo = '/corporativo/';
                        prev_attr = sliderItem[i].getAttribute('src');
                        index_attr = prev_attr.indexOf(corporativo);
                        subtr_attr = prev_attr.substring(0, index_attr+corporativo.length);
                        new_attr = subtr_attr+iniciativasContenido[sliderContador][tag_type];
                        sliderItem[i].setAttribute('src', new_attr);
                    }else{
                        sliderItem[i].innerHTML = iniciativasContenido[sliderContador][tag_type];
                    }
                    setTimeout(() => {
                        sliderItem[i].classList.remove('animado');
                    }, 100);
                }, 450);})(i);
            }
        }
    }  
})();
Calidra.init();