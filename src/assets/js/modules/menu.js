const menu = () => {

    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu');
    burger.addEventListener('click', () => {
        burger.classList.toggle('burger__active');
        menu.classList.toggle('menu__active');
        menu.classList.toggle('fade');
       

    });


}

export default menu;