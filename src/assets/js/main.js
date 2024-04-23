import menu from "./modules/menu";
import slider from "./modules/slider";

document.addEventListener('DOMContentLoaded', ()=> {
    'use strict';
   try   {
    slider();
    menu();
   
   }
   catch (e) {
console.log(e)
   }

   

});