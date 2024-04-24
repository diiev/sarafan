const menu = () => {
    let count = 0
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu'); 
   
    burger.addEventListener('click', () => {
        burger.classList.toggle('burger__active');
        menu.classList.toggle('menu__active');
        menu.classList.toggle('fade');
        document.body.classList.toggle('active')
        // count++;
        // document.body.style.paddingRight = '17px'
        // document.body.style.overflow = 'hidden';
        
        // if (count > 1)  {
        //     count = 0;
        //     document.body.style.paddingRight = '0px'
        //     document.body.style.overflow = 'scroll';
            
        // }
         

       

    });


}

export default menu;