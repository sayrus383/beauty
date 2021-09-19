<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--base(href="/")-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Салон</title>
    <!-- SEO Meta -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicon -->
    <meta property="og:image" content="/img/image.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <!-- build:css css/all.min.css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- endbuild -->
</head>
<body>
<!-- Preloader -->
<div class="preloader" id="preloader"><img class="preloader__img" src="/img/logo.svg" alt="logo"></div>
<!-- Slider Section -->
<section class="slider-section">
    <!-- Header -->
    <header class="header header--white">
        <div class="container">
            @include('components.top_menu')
        </div>
    </header>
    <div class="salon-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide salon-slider__slide">
                <picture class="salon-slider__picture"><img class="salon-slider__img" src="img/salon-slide-1.jpg"
                                                            srcset="img/salon-slide-1@2x.jpg 2x" alt="alt"></picture>
            </div>
            <div class="swiper-slide salon-slider__slide">
                <picture class="salon-slider__picture"><img class="salon-slider__img" src="img/main-bg-1.jpg"
                                                            srcset="img/main-bg-1@2x.jpg 2x" alt="alt"></picture>
            </div>
            <div class="swiper-slide salon-slider__slide">
                <picture class="salon-slider__picture"><img class="salon-slider__img" src="img/main-bg-2.jpg"
                                                            srcset="img/main-bg-2@2x.jpg 2x" alt="alt"></picture>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="container slider-section__container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="slider-section__descr">
                    <h2 class="slider-section__title">Новый формат <br>салонов красоты!</h2>
                    <div class="slider-section__text">
                        <p>№1 Beauty — уникальные пространства, в которых слились в единое целое высококачественный
                            сервис и искусство создания истинно элегантных и стильных образов.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <div class="video-tour"><a class="video-tour__link" data-fancybox
                                           href="https://www.youtube.com/watch?v=CIpOxa5hxOw">
                        <picture class="video-tour__picture"><img class="video-tour__img" src="img/video-img.jpg"
                                                                  srcset="img/video-img@2x.jpg 2x" alt="alt"></picture>
                        <h4 class="video-tour__title">виртуальный видео тур</h4></a></div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <picture class="about-section__picture animation-fade-in"><img class="about-section__img"
                                                                               src="img/about-img.jpg"
                                                                               srcset="img/about-img@2x.jpg 2x"
                                                                               alt="alt"></picture>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4 offset-xl-2 col-md-6">
                <div class="about-section__slogan animation-fade-in-left">
                    <p>Мы используем только те бренды, которые показали лучшие результаты в работе.</p>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="about-section__descr animation-fade-in-right">
                    <h2 class="section-title section-title--grey about-section__title">О нас</h2>
                    <div class="about-section__text">
                        <p>Наш бренд был основан в 2014 году для людей, которым важен уют , сервис и качество услуг!
                            Наши гости могут воспользоваться параллельным сервисом в 4 или 6 рук, чтобы освободить время
                            для более важных дел.</p>
                    </div>
                    <a class="about-section__more" href="#">подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section -->
@if ($services->isNotEmpty())
    <section class="services-section">
        @foreach($services as $service)
            <picture class="services-bg services-bg-{{ $service->id }}"><img class="services-bg__img"
                                                                             src="{{ $service->image_url }}"
                                                                             srcset="{{ $service->image_url }} 2x"
                                                                             alt="{{ $service->name }}"></picture>
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title services-section__title">Услуги</h2>
                    <ul class="services-list animation-zoom-in">
                        @foreach($services as $service)
                            <li class="services-list__item"><a class="services-list__link"
                                                               href="{{ route('services.index', ['id' => $service->id]) }}"
                                                               data-bg="{{ $service->id }}">{{ $service->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif
<!-- Loyalty Section -->
<section class="loyalty-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <picture class="loyalty-section__picture animation-fade-in-left"><img class="loyalty-section__img"
                                                                                      src="img/loyalty-img.svg"
                                                                                      alt="alt"></picture>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="loyalty-section__descr animation-fade-in-right">
                    <h2 class="section-title section-title--grey loyalty-section__title">Программа <br>лояльности</h2>
                    <div class="loyalty-section__text">
                        <p>Значимость этих проблем настолько очевидна, что семантический разбор внешних противодействий
                            играет определяющее значение для распределения внутренних резервов и ресурсов. </p>
                    </div>
                    <a class="loyalty-section__more call-popup" href="#loyalty-popup">подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="section-title section-title--grey team-section__title">Команда</h2>
            </div>
            <div class="col-lg-8">
                <div class="team-section__text">
                    <p>С другой стороны, внедрение современных методик обеспечивает широкому кругу (специалистов)
                        участие в формировании модели развития. Для современного мира курс на социально-ориентированный
                        национальный проект обеспечивает широкому кругу (специалистов) участие в формировании системы
                        обучения кадров, соответствующей насущным потребностям.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tabs team-section__tabs">
                    <ul class="tabs-toggle">
                        <li class="tabs-toggle__item on" data-toggle="#tab-1">Визажисты</li>
                        <li class="tabs-toggle__item" data-toggle="#tab-2">Ногтевой сервис</li>
                        <li class="tabs-toggle__item" data-toggle="#tab-3">Парикмахер-cтилисты</li>
                        <li class="tabs-toggle__item" data-toggle="#tab-4">Массажисты</li>
                    </ul>
                    <div class="tabs__panes">
                        <div class="tabs__pane on visible" id="tab-1">
                            <div class="team-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-1.jpg"
                                                                                     srcset="img/team-1@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Мелани Меликсетян</div>
                                            <div class="team-card__position">визажист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-2.jpg"
                                                                                     srcset="img/team-2@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Эла Садуева</div>
                                            <div class="team-card__position">визажист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-3.jpg"
                                                                                     srcset="img/team-3@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Алла Литянова</div>
                                            <div class="team-card__position">парикмахер-стилист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-4.jpg"
                                                                                     srcset="img/team-4@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Елизавета Орлова</div>
                                            <div class="team-card__position">ногтевой сервис</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-5.jpg"
                                                                                     srcset="img/team-5@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Елена Кравцов</div>
                                            <div class="team-card__position">парикмахер- стилист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-6.jpg"
                                                                                     srcset="img/team-6@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Елена Метлина</div>
                                            <div class="team-card__position">парикмахер-стилист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-7.jpg"
                                                                                     srcset="img/team-7@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Виктория Ефименко</div>
                                            <div class="team-card__position">ногтевой сервис</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-8.jpg"
                                                                                     srcset="img/team-8@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Елена Смирнова</div>
                                            <div class="team-card__position">ногтевой сервис</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-9.jpg"
                                                                                     srcset="img/team-9@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Сергей Кузнецов</div>
                                            <div class="team-card__position">массажист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-10.jpg"
                                                                                     srcset="img/team-10@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Ольга Балакина</div>
                                            <div class="team-card__position">массажист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-11.jpg"
                                                                                     srcset="img/team-11@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Сос Месропян</div>
                                            <div class="team-card__position">стилист-колорист</div>
                                        </a></div>
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-12.jpg"
                                                                                     srcset="img/team-12@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Валерия Босенко</div>
                                            <div class="team-card__position">визажист-бровист</div>
                                        </a></div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        <div class="tabs__pane" id="tab-2">
                            <div class="team-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-1.jpg"
                                                                                     srcset="img/team-1@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Мелани Меликсетян</div>
                                            <div class="team-card__position">ногтевой сервис</div>
                                        </a></div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        <div class="tabs__pane" id="tab-3">
                            <div class="team-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-1.jpg"
                                                                                     srcset="img/team-1@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Мелани Меликсетян</div>
                                            <div class="team-card__position">Парикмахер-cтилист</div>
                                        </a></div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        <div class="tabs__pane" id="tab-4">
                            <div class="team-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide team-slider__slide"><a class="team-card call-popup"
                                                                                    href="#team-popup-1">
                                            <picture class="team-card__picture"><img class="team-card__img"
                                                                                     src="img/team-1.jpg"
                                                                                     srcset="img/team-1@2x.jpg 2x"
                                                                                     alt="alt"></picture>
                                            <div class="team-card__name">Мелани Меликсетян</div>
                                            <div class="team-card__position">Массажист</div>
                                        </a></div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contacts Section -->
<section class="contacts-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title contacts-section__title">контакты</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="contacts-section__map animation-zoom-in">
                    <div id="google-map"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="contacts-section__contacts animation-fade-in">
                    <div class="contacts-item">
                        <div class="contacts-item__address" id="address-1">Москва, <br>Цветной бульвар, д.2,</div>
                        <div class="contacts-item__text">
                            <p>БЦ «Легенда Цветного»</p>
                            <p>10:00-22:00 ежедневно</p>
                            <p><a href="tel:+74955141170">+7(495)514-11-70</a></p>
                        </div>
                    </div>
                    <div class="contacts-item">
                        <div class="contacts-item__address" id="address-2">Московская область, <br>Ул. Тихая, д 27, п.
                            Заречье,
                        </div>
                        <div class="contacts-item__text">
                            <p>ЖК «Дом на Тихой»</p>
                            <p>10:00-22:00 ежедневно</p>
                            <p><a href="tel:+74955141170">+7(495)514-11-70</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
@include('components.footer')
<!-- Popup -->
<!-- Dark Bg -->
<div class="dark-bg"></div>
<div class="popup" id="loyalty-popup">
    <div class="popup__inner">
        <div class="popup__header">
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
            <h3 class="popup__title">ПРОГРАММА ЛОЯЛЬНОСТИ</h3>
        </div>
        <div class="popup__body">
            <div class="popup__text">
                <h3>1. ОБЩИЕ ПОЛОЖЕНИЯ</h3>
                <p>Данная программа лояльности действует с 1 сентября 2020 года</p>
                <p>В программе существует три уровня с соответствующим уровнем скидок на услуги и продукцию</p><br>
                <h3>2. ВСТУПЛЕНИЕ В ПРОГРАММУ И УДЕРЖАНИЕ СТАТУСА</h3>
                <p>SILVER</p>
                <p>Для получения статуса SILVER необходимо в течение 12 месяцев с момента первого посещения совершить
                    покупки суммарно на 150 000 рублей.</p>
                <p>Вступление в программу лояльности произойдет с визита, следующего за тем, во время которого сумма
                    покупок превысила установленный порог в 150 000 рублей.</p>
                <p>Если в течение 12 месяцев с момента первого посещения суммарные покупки оказались ниже 150 000
                    рублей, то у гостя остается возможность вступить в программу лояльности с момента, когда сумма его
                    покупок за прошедшие 12 месяцев на определенную дату достигнет порога 150 000 рублей.</p>
                <p>Для удержания статуса SILVER необходимо в течение 12 месяцев с даты вступления в программу совершить
                    покупки на сумму от 150 000 до 199 999 рублей.</p>
                <p>Если сумма покупок в течение 12 месяцев с даты вступления в программу окажется ниже 150 000 рублей,
                    статус SILVER обнуляется. Далее для гостя действуют условия, описанные в п.2.1.1. – 2.1.4. и
                    сохраняется возможность вновь вступить в программу лояльности в течение следующих 12 месяцев с даты
                    обнуления.</p>
                <p>GOLD</p>
                <p>Для получения статуса GOLD необходимо в течение 12 месяцев с даты получения статуса SILVER совершить
                    покупки суммарно на 200 000 рублей.</p>
                <p>Переход на уровень произойдет с визита, следующего за тем, во время которого сумма покупок превысила
                    установленный порог в 200 000 рублей.</p>
                <p>Для удержания статуса GOLD необходимо в течение 12 месяцев с даты перехода на уровень совершить
                    покупки на сумму от 200 000 до 249 999 рублей.</p>
                <p>Если сумма покупок в течение 12 месяцев с даты перехода на уровень окажется ниже 200 000 рублей,
                    статус гостя понижается до SILVER. Далее для гостя действуют условия, описанные в п.2.1.3. – 2.2.3.
                    и сохраняется возможность вновь повысить уровень в течение следующих 12 месяцев с даты снижения.</p>
            </div>
        </div>
    </div>
</div>
<div class="popup team-popup" id="team-popup-1">
    <div class="popup__inner">
        <div class="popup__header">
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
            <h3 class="popup__title">Команда</h3>
        </div>
        <div class="popup__body">
            <div class="team-popup__person">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <picture class="team-popup__picture"><img class="team-popup__img" src="img/team-popup-1.jpg"
                                                                  srcset="img/team-popup-1@2x.jpg 2x" alt="alt">
                        </picture>
                    </div>
                    <div class="col-sm-6">
                        <div class="team-popup__about">
                            <div class="team-popup__name">Эла Садуева</div>
                            <div class="team-popup__position">визажист</div>
                            <div class="team-popup__address">Москва,<br>Цветной бульвар, д.2,</div>
                            <div class="team-popup__place">БЦ «Легенда Цветного»</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__descr">
                <p>А также элементы политического процесса могут быть превращены в посмешище, хотя само их существование
                    приносит несомненную пользу обществу. Сложно сказать, почему некоторые особенности внутренней
                    политики освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы,
                    разумеется, ассоциативно распределены по отраслям. Непосредственные участники технического прогресса
                    представляют собой не что иное</p>
            </div>
        </div>
    </div>
</div>
<div class="popup mobile-menu" id="mobile-menu">
    <div class="popup__inner">
        <div class="popup__header">
            <div class="logo mobile-menu__logo"><a class="logo__link" href="{{ route('salon.index') }}">
                    <svg class="logo__img" width="70" height="92">
                        <use xlink:href="/img/sprite.svg#logo"></use>
                    </svg>
                </a></div>
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
        </div>
        @include('components.mobile')
    </div>
</div>
<div class="popup" id="search-popup">
    <div class="popup__inner">
        <div class="popup__header">
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
            <h3 class="popup__title">Поиск</h3>
        </div>
        <div class="popup__body">
            <form class="form search-form">
                <div class="search-form__group">
                    <input class="form__input search-form__input" type="text" name="inputSearch"
                           placeholder="Введите поисковую фразу" required>
                    <button class="button search-form__button">Искать</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="popup cart-popup" id="cart-popup">
    <div class="popup__inner">
        <div class="popup__header">
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
            <h3 class="popup__title">корзина</h3>
        </div>
        <div class="popup__body">
            <div class="cart-item cart-item--popup">
                <div class="cart-item__left">
                    <picture class="cart-item__picture"><img class="cart-item__img" src="img/main-product-1.png"
                                                             srcset="img/main-product-1@2x.png 2x" alt="alt"></picture>
                    <div class="cart-item__descr">
                        <h3 class="cart-item__title"><a class="cart-item__link" href="#">Kevin.Murphy HYDRATE-ME</a>
                        </h3>
                        <div class="cart-item__price">16 650.00 ₽ <span>x 2</span></div>
                        <div class="quantity cart-item__quantity">
                            <button class="quantity__minus" type="button">
                                <svg class="quantity__icon" width="19" height="2">
                                    <use xlink:href="img/sprite.svg#minus"></use>
                                </svg>
                            </button>
                            <input class="quantity__input" type="text" name="inputCount" value="1">
                            <button class="quantity__plus" type="button">
                                <svg class="quantity__icon" width="19" height="19">
                                    <use xlink:href="img/sprite.svg#plus"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="cart-item__clear" type="button">
                        <svg class="cart-item__clear-icon">
                            <use xlink:href="img/sprite.svg#close"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cart-item cart-item--popup">
                <div class="cart-item__left">
                    <picture class="cart-item__picture"><img class="cart-item__img" src="img/main-product-2.png"
                                                             srcset="img/main-product-2@2x.png 2x" alt="alt"></picture>
                    <div class="cart-item__descr">
                        <h3 class="cart-item__title"><a class="cart-item__link" href="#">Kevin.Murphy HYDRATE-ME</a>
                        </h3>
                        <div class="cart-item__price">16 650.00 ₽ <span>x 2</span></div>
                        <div class="quantity cart-item__quantity">
                            <button class="quantity__minus" type="button">
                                <svg class="quantity__icon" width="19" height="2">
                                    <use xlink:href="img/sprite.svg#minus"></use>
                                </svg>
                            </button>
                            <input class="quantity__input" type="text" name="inputCount" value="1">
                            <button class="quantity__plus" type="button">
                                <svg class="quantity__icon" width="19" height="19">
                                    <use xlink:href="img/sprite.svg#plus"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="cart-item__clear" type="button">
                        <svg class="cart-item__clear-icon">
                            <use xlink:href="img/sprite.svg#close"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="popup-total">
                <div class="popup-total__title">Итого к оплате</div>
                <div class="popup-total__price">49 500.00 ₽</div>
                <a class="button button--big popup-total__button" href="#">перейти к оформлению</a>
            </div>
        </div>
    </div>
</div>
<!-- JS -->
<!-- build:js js/all.min.js -->
<script src="{{ mix('js/jquery.min.js') }}"></script>
<script src="{{ mix('js/gsap.min.js') }}"></script>
<script src="{{ mix('js/ScrollMagic.min.js') }}"></script>
<script src="{{ mix('js/animation.gsap.min.js') }}"></script>
<script src="{{ mix('js/SmoothScroll.js') }}"></script>
<script src="{{ mix('js/swiper.min.js') }}"></script>
<script src="{{ mix('js/select2.full.min.js') }}"></script>
<script src="{{ mix('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ mix('js/bootstrap-slider.min.js') }}"></script>
<script src="{{ mix('js/slider.js') }}"></script>
<script src="{{ mix('js/common.js') }}"></script>
<!-- endbuild -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlJovNLyxttI7YFEZb3Ue2mGXCyc_2vfs&amp;callback=initMap"
        async defer></script>
</body>
</html>
