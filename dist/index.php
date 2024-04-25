<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

                    <div class="breadcumbs">
                     
                        <nav aria-label="Breadcrumb" class="breadcrumb"> 
                        <?php 
                            $APPLICATION->IncludeComponent (
                                "bitrix:breadcrumb",
                                "",
                                Array(
                                    "PATH"=>"",
                                    "SITE_ID"=>"s1",
                                    "START_FROM"=>0
                                )
                                );
                        ?>
                            <ul>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Аренда</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="home__wrapper">
                        <div class="home__img">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_home-img.php"
	)
);?>
     
                          
                        </div>
                        <div class="home__descr">
                            <h1 class="home__title">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_home-title.php"
	)
);?>
                          </h1>
                            <div class="home__text">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_home-text.php"
	)
);?>
                               
                            </div>
                            <a href="#" class="home__link">Скачать презентацию <svg width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0007 16.5667L4.56732 10.1333L6.00065 8.70001L10.0007 12.7V0.333344H12.0007V12.7L16.0007 8.70001L17.434 10.1333L11.0007 16.5667ZM2.33398 21.6667C1.80065 21.6667 1.33398 21.4667 0.933984 21.0667C0.533984 20.6667 0.333984 20.2 0.333984 19.6667V14.9H2.33398V19.6667H19.6673V14.9H21.6673V19.6667C21.6673 20.2 21.4673 20.6667 21.0673 21.0667C20.6673 21.4667 20.2007 21.6667 19.6673 21.6667H2.33398Z"
                                        fill="#151516" />
                                </svg></a>
                             <h2 class="home__subtitle">
                                <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/inc_home-subtitle.php"
                                        )
                                    );?>   
                           </h2>  
                              <ul class="home__lists circle__lists"> 
                              <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/inc_home-lists.php"
                                        )
                                    );?> 
                             
                              </ul>
                              <div class="home__text">
                              <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/inc_home-subtext.php"
                                        )
                                    );?> 
                              </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="promo">
                <div class="container">
                    <div class="promo__title"> 
                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/inc_promo-title.php"
                                        )
                                    );?> 
                       
                    </div>
                    <div class="promo__wrapper">
                        <div class="promo__slider">
                            <div id="slider" class="promo__slider-items">
                                <div class="promo__slider-item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/brand1.jpg" alt=""></div>
                                <div class="promo__slider-item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/brand2.jpg" alt=""></div>
                                <div class="promo__slider-item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/brand3.jpg" alt=""></div>
                                
                            </div>
                            <div id="slider__btns" class="promo__slider-btns">
                                <div class="promo__slider-left">
                                    <svg width="43" height="16" viewBox="0 0 43 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M42 9C42.5523 9 43 8.55228 43 8C43 7.44772 42.5523 7 42 7L42 9ZM0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928929C7.68054 0.538405 7.04738 0.538405 6.65685 0.928929L0.292893 7.29289ZM42 7L1 7L1 9L42 9L42 7Z" fill="#151516" />
                                      </svg>
                                </div>
                                <ul id="slider__dots" class="promo__slider-dots"></ul>
                                <div class="promo__slider-right">
                                    <svg width="43" height="16" viewBox="0 0 43 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9L1 7ZM42.7071 8.70711C43.0976 8.31658 43.0976 7.68342 42.7071 7.29289L36.3431 0.928932C35.9526 0.538408 35.3195 0.538408 34.9289 0.928932C34.5384 1.31946 34.5384 1.95262 34.9289 2.34315L40.5858 8L34.9289 13.6569C34.5384 14.0474 34.5384 14.6805 34.9289 15.0711C35.3195 15.4616 35.9526 15.4616 36.3431 15.0711L42.7071 8.70711ZM1 9L42 9V7L1 7L1 9Z" fill="#151516" />
                                      </svg>
                                </div>
                            </div>
                        </div>
                       <ul class="promo__lists circle__lists">
                        <li class="promo__list circle__list">Якорные арендаторы - Лента, Детский Мир, Технопарк, Модис, Familia, Читай город, Тутанхамон, Л'Этуаль </li>
                        <li class="promo__list circle__list">Бренды - EWA, Artigli, Gerzedo, Goergo, Du monde, Petek, Neri Karra, Ledy Collection, Paolo Conte, P'Cont, VINZER, Ace, Tonnelli, Milavitsa, и др.</li>
                        <li class="promo__list circle__list">  Магазины спортивной одежды и инвентаря: Адреналин, Спорт Лайн</li>
                        <li class="promo__list circle__list"> Зона фудкорта - Burger King, Империя вкуса, Про Кофий, Добрая сдоба</li>
                        <li class="promo__list circle__list"> Салоны связи: Билайн, Мегафон, YOTA, Связной, Теле2</li>
                        <li class="promo__list circle__list">  Зоосад, аптека «Здесь аптека», «Арт-оптика», Fresh Оптика, ковры, салоны штор, текстиль Missis Hatson и Home TEX, салон Арт-Самовар, посуда, подарки, картины, сувениры и другие.</li>
            
                       
                       </ul>
                    </div>
                </div>
            </section>
            
            <section class="demo">
                <div class="container">
                    <div class="demo__wrapper">
                        <div class="demo__descr">
                            <div class="demo__descr-text">Общая площадь торгового центра <span>25 816 м<sup>2</sup></span></div>
                            <div class="demo__descr-text">Площадь, сдаваемая в аренду <span>16 675 м<sup>2</sup></span></div>
                            <div class="demo__descr-text">Парковка (машиномест) <span>500</span></div>
                            <div class="demo__descr-text">Посещаемость (в неделю) <span>100 000 чел</div>
                        </div>
                   
                        <div class="demo__img">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/demo1.jpg" alt="demo1">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/demo2.jpg" alt="demo2">
                        </div>
                    </div>
                    <div class="demo__container">
                        <div class="demo__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/demo3.jpg" alt="demo3"></div>
                        <div class="demo__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/demo4.jpg" alt="demo4"></div>
                        <div class="demo__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/demo5.jpg" alt="demo5"></div>
                    </div>
            
                 
                </div>
            </section>
      

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>