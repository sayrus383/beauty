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
                    <a class="about-section__more" href="{{ route('about') }}">подробнее</a>
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
                        @foreach($categories as $category)
                            <li class="tabs-toggle__item {{ $loop->first ? 'on' : null }}"
                                data-toggle="#tab-{{ $category->id }}">
                                {{ $category->name }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="tabs__panes">
                        @foreach($categories as $category)
                            <div class="tabs__pane {{ $loop->first ? 'on visible' : null }}"
                                 id="tab-{{ $category->id }}">
                                <div class="team-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($employees as $employee)
                                            @if ($employee->category_id == $category->id)
                                                <div class="swiper-slide team-slider__slide"><a
                                                        class="team-card call-popup"
                                                        href="#team-popup-{{ $employee->id }}">
                                                        <picture class="team-card__picture"><img class="team-card__img"
                                                                                                 src="{{ $employee->image_url }}"
                                                                                                 srcset="{{ $employee->image_url }} 2x"
                                                                                                 alt="{{ $employee->name }}">
                                                        </picture>
                                                        <div class="team-card__name">{{ $employee->name }}</div>
                                                        <div class="team-card__position">{{ $employee->position }}</div>
                                                    </a></div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contacts Section -->
<section class="contacts-section" id="contacts">
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
                    @foreach($settings->getField('contacts', false) ?? [] as $key => $setting)
                        <div class="contacts-item">
                            <div class="contacts-item__address show-map"
                                 data-lat="{{ $setting['map']['lat'] ?? 0 }}"
                                 data-lng="{{ $setting['map']['lng'] ?? 0 }}"
                            >
                                {!! $setting['address'] ?? null !!}
                            </div>
                            <div class="contacts-item__text">
                                <p>{{ $setting['place'] ?? null }}</p>
                                <p>{{ $setting['schedule'] ?? null }}</p>
                                <p>
                                    <a href="tel:+{{ pretty_phone($setting['phone_number'] ?? null) }}">{{ $setting['phone_number'] ?? null }}</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
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
@foreach($employees as $employee)
    <div class="popup team-popup" id="team-popup-{{ $employee->id }}">
        <div class="popup__inner">
            <div class="popup__header">
                <div class="popup__close">
                    <svg class="popup__close-icon" width="20" height="20">
                        <use xlink:href="/img/sprite.svg#close"></use>
                    </svg>
                </div>
                <h3 class="popup__title">Команда</h3>
            </div>
            <div class="popup__body">
                <div class="team-popup__person">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <picture class="team-popup__picture"><img class="team-popup__img"
                                                                      src="{{ $employee->image_url }}"
                                                                      srcset="{{ $employee->image_url }} 2x"
                                                                      alt="{{ $employee->name }}">
                            </picture>
                        </div>
                        <div class="col-sm-6">
                            <div class="team-popup__about">
                                <div class="team-popup__name">{{ $employee->name }}</div>
                                <div class="team-popup__position">{{ $employee->position }}</div>
                                @if ($employee->address)
                                    <div class="team-popup__address">{!! $employee->address !!}</div>
                                @endif
                                @if ($employee->bc)
                                    <div class="team-popup__place">{{ $employee->bc }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__descr">
                    <p>
                        {!! $employee->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
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
