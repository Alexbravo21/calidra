
const Calidra = (() => {
    const el = document.querySelector('.burger');

    return{
        init: () => {
            Calidra.burgerClick();
        },
        burgerClick: () => {
            el.onclick = () => el.classList.toggle('open');
        }
    }  
})();
Calidra.init();