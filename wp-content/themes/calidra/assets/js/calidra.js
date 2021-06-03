
const Calidra = (() => {
    const elBurger = document.querySelector('.burger');
    const elUl = document.querySelector('.nav-ul');
    const acordeonButtons = document.querySelectorAll('.acordeon-down-arrow');
    const iniciativasDer = document.querySelector('.corporativo-navegador-der');
    const iniciativasIzq = document.querySelector('.corporativo-navegador-izq');
    const sliderItem = document.querySelectorAll('.slider-anim');
    const cerrarVideo = document.querySelector('.close');
    const videoCont = document.querySelector('.video-cont-fullscreen');
    const videoUsosHome = document.querySelector('.usos-cotidianos-home');
    const cerrarDireccion = document.querySelector('.cerrar');
    const localizadorInfo = document.querySelector('.localizador-mapa-info');
    const usosPlayButton = document.querySelectorAll('.play-button');
    const viejaConfiable = document.querySelectorAll('.reliable-old-lady');
    const viejaConfiableRight = document.querySelectorAll('.reliable-old-lady-right');
    const viejaConfiableUp = document.querySelectorAll('.reliable-old-lady-up');
    const viejaConfiableDown = document.querySelectorAll('.reliable-old-lady-down');
    
    let sliderContador = 0;
    let corporativo,  prev_attr, index_attr, subtr_attr, new_attr, sumrest;
    const iniciativasContenido = [
        ['LOREM IPSUM DOLOR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'iniciativas.jpg'],
        ['HOLA CALIDRA', 'HOLA Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'responsabilidad-social.jpg'],
        ['ADIOS CALIDRA', 'ADIOS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur', 'colabora-vacantes.jpg']
    ]
    let carousels;
    let lastKnownScrollPosition = 0;
    let ticking = false;

    return{
        init: () => {
            Calidra.burgerClick();
            Calidra.accordion();
            //setTimeout(()=>{
                Calidra.bulmaCarousel2('.carousel', 2);       
            //}, 2000)
            Calidra.bulmaCarousel2('.home-carousel', 2);
            Calidra.bulmaCarousel('.usos-carousel', 1);
            Calidra.clickEvents();
            Calidra.scrollFunction();
            Calidra.scrollAction();
        },
        clickEvents: () => {
            if (iniciativasDer) iniciativasDer.onclick = (e) => {e.stopPropagation(); Calidra.iniciativasCarousel('d')};
            if (iniciativasIzq) iniciativasIzq.onclick = (e) => {e.stopPropagation(); Calidra.iniciativasCarousel('i')};
            if (cerrarVideo) cerrarVideo.onclick = (e) => {e.stopPropagation(); Calidra.cerrarVideoM()};
            if (videoUsosHome) videoUsosHome.onclick = (e) => {e.stopPropagation(); Calidra.abrirVideo('https://www.youtube.com/embed/videoseries?list=PLkr_M5XFXGIhVRmy005mQ4j8zo7FhRB2p')};
            if (cerrarDireccion) cerrarDireccion.onclick = (e) => {e.stopPropagation(); Calidra.cerrarDireccion()};
            if (usosPlayButton){
                for (var i = 0; i < usosPlayButton.length; i++){
                    usosPlayButton[i].onclick = (e) => {
                        e.stopPropagation(); 
                        if (e.target.dataset.src) {
                            let src = e.target.dataset.src;
                            Calidra.abrirVideo(src);
                        }
                    };
                }
            }
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
                infinite: true,
                icons: {
                    previous: '<p style="user-select:none;">ANTERIOR</p>',
                    next: '<p style="user-select:none;">SIGUIENTE</p>'
                }
            }
            // Initialize all elements with carousel class.
            carousels = bulmaCarousel.attach(clase, options);
        },
        bulmaCarousel2: (clase, slides) => {
            const options = {
                slidesToShow: slides,
                pagination: false,
                infinite: true
            }
            // Initialize all elements with carousel class.
            carousels = bulmaCarousel2.attach(clase, options);
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
        },
        cerrarVideoM: () =>{
            videoCont.classList.add('cerrado');
            setTimeout(() => {
                videoCont.style.display = 'none';
                videoCont.children[0].children[1].setAttribute('src', '');
            }, 450);
        },
        abrirVideo: (src) =>{
            videoCont.style.display = 'flex';
            videoCont.classList.remove('cerrado');
            videoCont.children[0].children[1].setAttribute('src', src);
        },
        cerrarDireccion: () => {
            localizadorInfo.classList.add('cerrado');
            setTimeout(() => {
                localizadorInfo.style.display = 'none';
            }, 450);
        },
        scrollFunction: () => {              
            document.addEventListener('scroll', function(e) {
                lastKnownScrollPosition = window.scrollY;
                
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        Calidra.scrollAction(lastKnownScrollPosition);
                        ticking = false;
                    });
                
                    ticking = true;
                }
            });
        },
        scrollAction: (scrollPos) => {
            viejaConfiable.forEach((oldLady)=>{
                if (!oldLady.classList.contains('animado') && Calidra.isInViewport(oldLady)){
                    oldLady.classList.add('animado');
                }
            });
            viejaConfiableRight.forEach((oldLady)=>{
                if (!oldLady.classList.contains('animado') && Calidra.isInViewport(oldLady)){
                    oldLady.classList.add('animado');
                }
            });
            viejaConfiableUp.forEach((oldLady)=>{
                if (!oldLady.classList.contains('animado') && Calidra.isInViewport(oldLady)){
                    oldLady.classList.add('animado');
                }
            });
            viejaConfiableDown.forEach((oldLady)=>{
                if (!oldLady.classList.contains('animado') && Calidra.isInViewport(oldLady)){
                    oldLady.classList.add('animado');
                }
            });
        },
        isInViewport: (element) => {
            const rect = element.getBoundingClientRect();
            const elementHEight = element.offsetHeight;
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight + elementHEight*.35 || document.documentElement.clientHeight + elementHEight*.35)
            );
        }
    }  
})();
Calidra.init();