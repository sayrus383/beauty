<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--base(href="/")-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>{{ $variable->getField('title') ?? config('app.name') }}</title>
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
<!-- Main Page -->
<main class="main-page">
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-12 main-header__col">
                    <div class="main-header__phone"><a class="main-header__phone-link"
                                                       href="tel:+{{ pretty_phone($settings->getField('phone_number', false)) }}">
                            {{ $settings->getField('phone_number', false) }}
                        </a></div>
                    <div class="logo main-header__logo"><a class="logo__link" href="/">
                            <svg class="logo__img" width="165" height="50" viewBox="0 0 165 50" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.54133 8.71465C6.54133 4.25611 9.10301 1.41952 10.9926 1.41952C13.1501 1.41952 15.4439 5.13416 15.4439 10.3366C15.4439 12.0268 15.1736 13.7829 14.8376 16.0781L19.9512 12.2951C19.9512 4.24635 15.836 0.136597 11.3165 0.136597C6.73126 0.136597 2.48207 4.19026 2.48207 11.0122C2.48207 23.5098 16.3084 25.4683 15.9042 38.6415C15.7678 42.9659 14.4212 47.3561 11.2507 47.3561C7.47395 47.3561 5.58435 41.0732 5.58435 31.6171C5.57851 30.5325 5.64603 29.4487 5.78646 28.3732L0.660645 32.6293C1.20123 43.6415 5.58435 48.7756 10.3059 48.7756C15.0275 48.7756 20.1533 43.6415 19.9512 34.3854C19.6931 20.4025 6.54133 18.5098 6.54133 8.71465Z"
                                    fill="white"/>
                                <path
                                    d="M30.0787 0.878052H24.6851V48.1683H29.2703H30.0787H42.4902V43.439L30.0787 46.8805V0.878052Z"
                                    fill="white"/>
                                <path
                                    d="M54.1471 0.33905C44.9766 0.33905 43.0188 8.91709 43.0188 19.1195C43.0188 34.7927 45.6511 49.1805 54.1471 49.1805C62.7136 49.1805 65.3484 34.7903 65.3484 19.1195C65.3435 8.91709 62.7136 0.33905 54.1471 0.33905ZM54.2152 47.4122C49.2915 47.4122 48.6852 35.861 48.6852 19.1195C48.6852 7.83661 48.617 2.09515 54.1471 2.09515C59.1389 2.09515 59.6795 7.77076 59.6795 18.9244C59.6795 35.8049 59.1389 47.4244 54.2274 47.4244L54.2152 47.4122Z"
                                    fill="white"/>
                                <path
                                    d="M94.1258 45.5049L88.0138 0.878052H87.948H84.3052L80.168 44.1805L74.0535 0.878052H67.9829L75.8068 48.1683H79.7857H80.7305H81.405L85.6834 17.2366L90.1737 48.1683H93.9504H94.4886H95.6355L102.045 0.878052H97.0527L94.1258 45.5049Z"
                                    fill="white"/>
                                <path
                                    d="M153.578 0.33905C144.405 0.33905 142.45 8.91709 142.45 19.1195C142.45 34.7927 145.08 49.1805 153.578 49.1805C162.144 49.1805 164.779 34.7903 164.779 19.1195C164.762 8.91709 162.132 0.33905 153.578 0.33905ZM153.646 47.4122C148.722 47.4122 148.116 35.861 148.116 19.1195C148.116 7.83661 148.048 2.09515 153.578 2.09515C158.57 2.09515 159.108 7.77076 159.108 18.9244C159.096 35.8049 158.558 47.4244 153.634 47.4244L153.646 47.4122Z"
                                    fill="white"/>
                                <path
                                    d="M138.325 48.2317L132.473 1.07806L128.908 1.00977L128.906 1.07806H128.774L121.82 36.1585L114.449 1.07806H108.663L110.502 6.59513L105.101 48.2317H109.403L111.364 9.80245L119.426 48.2317H121.374H122.049L128.801 8.77074L132.741 48.2317H138.325Z"
                                    fill="white"/>
                            </svg>
                        </a></div>
                    <ul class="social main-header__social">
                        <li class="social__item">
                            @if ($settings->getField('instagram', false))
                                <a class="social__link"
                                   href="{{ $settings->getField('instagram', false) }}">
                                    <svg class="social__icon" width="16" height="16">
                                        <use xlink:href="/img/sprite.svg#instagram"></use>
                                    </svg>
                                </a>
                            @endif
                        </li>
                        <li class="social__item">
                            @if ($settings->getField('youtube', false))
                                <a class="social__link"
                                   href="{{ $settings->getField('youtube', false) }}">
                                    <svg class="social__icon" width="20" height="14">
                                        <use xlink:href="/img/sprite.svg#youtube"></use>
                                    </svg>
                                </a>
                            @endif
                        </li>
                        <li class="social__item">
                            @if ($settings->getField('facebook', false))
                                <a class="social__link"
                                   href="{{ $settings->getField('facebook', false) }}">
                                    <svg class="social__icon" width="8" height="16">
                                        <use xlink:href="/img/sprite.svg#facebook"></use>
                                    </svg>
                                </a>
                            @endif
                        </li>
                        <li class="social__item">
                            @if ($settings->getField('twitter', false))
                                <a class="social__link"
                                   href="{{ $settings->getField('twitter', false) }}">
                                    <svg class="social__icon" width="18" height="14">
                                        <use xlink:href="/img/sprite.svg#twitter"></use>
                                    </svg>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Slider -->
    <div class="main-slider swiper-container">
        <div class="main-slider__progress"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="main-slide">
                    <picture class="main-slide__picture"><img class="main-slide__img" src="/img/main-bg-1.jpg"
                                                              srcset="/img/main-bg-1@2x.jpg 2x" alt="alt"></picture>
                    <div class="container main-slide__container">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-slide__text">
                                    <p>
                                        {!! $variable->getField('salon_text') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($variable->getField('services', false) ?? [] as $service)
                                <div class="col-lg-2 main-slide__col"><a class="main-slide-card"
                                                                         href="{{ $service['link'] ?? '#' }}">
                                        <picture class="main-slide-card__picture"><img class="main-slide-card__img"
                                                                                       src="{{ $service['image'] ?? null }}"
                                                                                       srcset="{{ $service['image' ?? null] }} 2x"
                                                                                       alt="{{ $service['name'] ?? null }}">
                                        </picture>
                                        <div class="main-slide-card__descr">
                                            <div class="main-slide-card__title">{{ $service['name'] ?? '-' }}</div>
                                            <div class="main-slide-card__price">{{ $service['price'] ?? '-' }}</div>
                                        </div>
                                    </a></div>
                            @endforeach
                            <div class="col-lg-4">
                                <div class="main-slide-go"><a class="main-slide-go__link"
                                                              href="{{ route('salon.index') }}">Перейти на <br>страницу
                                        Салона
                                        <svg class="main-slide-go__icon" width="15" height="9">
                                            <use xlink:href="/img/sprite.svg#arrow-bottom"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="main-slide">
                    <picture class="main-slide__picture"><img class="main-slide__img" src="/img/main-bg-2.jpg"
                                                              srcset="/img/main-bg-2@2x.jpg 2x" alt="alt"></picture>
                    <div class="container main-slide__container">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-slide__text">
                                    <p>
                                        {!! $variable->getField('store_text') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($variable->getField('products', false) ?? [] as $product)
                                <div class="col-lg-2 main-slide__col"><a class="main-slide-product"
                                                                         href="{{ $product['link'] ?? '#' }}">
                                        <picture class="main-slide-product__picture"><img
                                                class="main-slide-product__img"
                                                src="{{ $product['image'] ?? null }}"
                                                srcset="{{ $product['image'] ?? null }} 2x"
                                                alt="alt"></picture>
                                        <div class="main-slide-product__descr">
                                            <div class="main-slide-product__title">
                                                {{ $product['name'] ?? '-' }}
                                            </div>
                                            <div class="main-slide-product__price">
                                                {{ $product['price'] ?? '-' }}
                                            </div>
                                        </div>
                                    </a></div>
                            @endforeach
                            <div class="col-lg-4">
                                <div class="main-slide-go"><a class="main-slide-go__link"
                                                              href="{{ $settings->getField('link', false) }}">Перейти на
                                        <br>страницу
                                        магазина
                                        <svg class="main-slide-go__icon" width="15" height="9">
                                            <use xlink:href="/img/sprite.svg#arrow-bottom"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-nav">
            <div class="main-slider-nav__item is-active">
                <div class="main-slider-nav__link" data-index="0">Салоны</div>
            </div>
            <div class="main-slider-nav__item">
                <div class="main-slider-nav__link" data-index="1">Интернет магазин</div>
            </div>
        </div>
    </div>
</main>
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
