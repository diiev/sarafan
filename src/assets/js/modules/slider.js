import { tns } from "tiny-slider";

const slider = () => { 

    const sliderItems = document.querySelectorAll('.promo__slider-item');
    const sliderDots = document.querySelector('.promo__slider-dots');
        for (let i = 0; i < sliderItems.length; i++) {
        const li = document.createElement('li');
        sliderDots.appendChild(li);
       }
    const _slider = tns({
        container: '#slider',
        navContainer: '#slider__dots',
        items: 1,
        nav: true,
        navAsThumbnails: true,
        controls: false, 
        "flexWidth": 308,
        gutter: 46,
        loop: true,
        freezable: false,
        responsive: {
            390: {
                items: 2
            },
           
            1024: {
                items: 1,
            },
            1180: {
                items: 3,
              
            }
          }
         
    });  
 

    document.querySelector('.promo__slider-left').addEventListener('click',function () {
        _slider.goTo('prev');
      });
      document.querySelector('.promo__slider-right').addEventListener('click',function () {
        _slider.goTo('next');
      });
 
       
   

};
export default slider;