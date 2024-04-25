<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<?php $APPLICATION->ShowHead(); ?>
	<?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/assets/css/style.min.css') ?>
	<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/js/script.js') ?>
</head>
<body>  
  <div id="panel"> <?php $APPLICATION->ShowPanel(); ?></div>
     <div class="wrapper">
        <header class="header">
        <div class="container">
           <div class="header__wrapper">
           <a href="/" class="logo header__logo">
              <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.png" alt="logo">
            </a>
              <div class="header__time-works">
                 Режим работы: пн-вс 10:00-21:00<span><br>Лента 08:00-22:00</span> 
              </div>
              <div class="header__links">
                 <a href="#" class="header__link">Контакты</a>
                 <a href="#" class="header__link">Карта ТЦ</a>
              </div>
              <div class="header__search search">
                 <input type="text" class="header__search-input search__input" placeholder="Найти магазин">
                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5833 19.1693L11.1042 13.3404C10.6875 13.7246 10.2014 14.0238 9.64583 14.238C9.09028 14.4523 8.5 14.5594 7.875 14.5594C6.375 14.5594 5.10417 14.0053 4.0625 12.8972C3.02083 11.789 2.5 10.4518 2.5 8.88564C2.5 7.31945 3.02083 5.98227 4.0625 4.87412C5.10417 3.76596 6.36806 3.21188 7.85417 3.21188C9.32639 3.21188 10.5799 3.76596 11.6146 4.87412C12.6493 5.98227 13.1667 7.31945 13.1667 8.88564C13.1667 9.52098 13.0694 10.1342 12.875 10.7252C12.6806 11.3162 12.3889 11.8703 12 12.3874L17.5 18.1942L16.5833 19.1693ZM7.85417 13.2296C8.97917 13.2296 9.9375 12.8048 10.7292 11.9552C11.5208 11.1056 11.9167 10.0824 11.9167 8.88564C11.9167 7.68883 11.5208 6.66563 10.7292 5.81605C9.9375 4.96646 8.97917 4.54167 7.85417 4.54167C6.71528 4.54167 5.74653 4.96646 4.94792 5.81605C4.14931 6.66563 3.75 7.68883 3.75 8.88564C3.75 10.0824 4.14931 11.1056 4.94792 11.9552C5.74653 12.8048 6.71528 13.2296 7.85417 13.2296Z" fill="#6B7073" />
                  </svg>
              </div>
              <div class="header__burger burger">
                 <span></span>
                 <span></span>
                 <span></span>
              </div>
           </div>
        </div> 
        <nav class="header__menu menu">
           <div class="container">
              <div class="menu__wrapper">
        
              
              <ul class="menu__main">
                 <li class="menu__main-list"><a href="" class="menu__main-link">О нас</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">События</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Галерея</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Аренда</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Карта ТЦ</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Контакты</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Вакансии</a></li>
                 <li class="menu__main-list"><a href="" class="menu__main-link">Тендеры</a></li>
              </ul>
              <div class="menu__divider"></div>
              <div class="menu__content">
                 <ul class="menu__submain">
                    <h3 class="menu__submain-title">Магазины</h3>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Все магазины</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Женская одежда</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Мужская одежда</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Детская одежда</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Детские товары</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Обувь</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Кожгалантерея</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Продукты</a></li>
                   
                 </ul> 
                 <ul class="menu__submain"> 
                    <h3 class="menu__submain-title">ㅤ</h3>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Цифровая и бытовая техника</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link"> Парфюмерия, косметика</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Ювелирные украшения</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Сувениры, подарки</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Полезное</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Товары для дома</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Спортивные товары, одежда</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Товары для животных</a></li>
                 </ul>
                 <ul class="menu__submain">
                    <h3 class="menu__submain-title">Кафе и рестораны</h3>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Кафе и рестораны</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link"> Рестораны быстрого обслуживания</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Кофейни</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Мороженое и десерты</a></li>
                 </ul> 
                 <ul class="menu__submain">
                    <h3 class="menu__submain-title">Услуги и сервисы</h3>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Банкоматы</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Салоны связи</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Парикмахерские</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Администрация</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Продукты</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Другое</a></li>
                 </ul> 
                 <ul class="menu__submain">
                    <h3 class="menu__submain-title">Развлечения</h3>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Джунгли парк</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Мероприятия</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Акции</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Новости</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Продукты</a></li>
                    <li class="menu__submain-list"><a href="" class="menu__submain-link">Другое</a></li>
                 </ul>
              </div>
           </div> 
        </div>
          
        </nav>
        </header>   

