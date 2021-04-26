
const Calidra = (() => {
    const elBurger = document.querySelector('.burger');
    const elUl = document.querySelector('.nav-ul');

    return{
        init: () => {
            Calidra.burgerClick();
        },
        burgerClick: () => {
            elBurger.onclick = () => {
                elBurger.classList.toggle('open');
                elUl.classList.toggle('open');
            }
        }
    }  
})();
Calidra.init();