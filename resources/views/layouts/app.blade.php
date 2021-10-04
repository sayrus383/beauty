<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--base(href="/")-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- SEO Meta -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicon -->
    <meta property="og:image" content="img/image.jpg">
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
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <!-- build:css css/all.min.css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- endbuild -->
</head>
<body>
<!-- Preloader -->
<div class="preloader" id="preloader"><img class="preloader__img" src="/img/logo.svg" alt="logo"></div>
<!-- Header -->
<header class="header">
    <div class="container">
        @include('components.top_menu')
    </div>
</header>
@yield('content')
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
                    <svg class="logo__img" width="165" height="50" viewBox="0 0 165 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.54133 8.71465C6.54133 4.25611 9.10301 1.41952 10.9926 1.41952C13.1501 1.41952 15.4439 5.13416 15.4439 10.3366C15.4439 12.0268 15.1736 13.7829 14.8376 16.0781L19.9512 12.2951C19.9512 4.24635 15.836 0.136597 11.3165 0.136597C6.73126 0.136597 2.48207 4.19026 2.48207 11.0122C2.48207 23.5098 16.3084 25.4683 15.9042 38.6415C15.7678 42.9659 14.4212 47.3561 11.2507 47.3561C7.47395 47.3561 5.58435 41.0732 5.58435 31.6171C5.57851 30.5325 5.64603 29.4487 5.78646 28.3732L0.660645 32.6293C1.20123 43.6415 5.58435 48.7756 10.3059 48.7756C15.0275 48.7756 20.1533 43.6415 19.9512 34.3854C19.6931 20.4025 6.54133 18.5098 6.54133 8.71465Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
                        <path
                            d="M30.0787 0.878052H24.6851V48.1683H29.2703H30.0787H42.4902V43.439L30.0787 46.8805V0.878052Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
                        <path
                            d="M54.1471 0.33905C44.9766 0.33905 43.0188 8.91709 43.0188 19.1195C43.0188 34.7927 45.6511 49.1805 54.1471 49.1805C62.7136 49.1805 65.3484 34.7903 65.3484 19.1195C65.3435 8.91709 62.7136 0.33905 54.1471 0.33905ZM54.2152 47.4122C49.2915 47.4122 48.6852 35.861 48.6852 19.1195C48.6852 7.83661 48.617 2.09515 54.1471 2.09515C59.1389 2.09515 59.6795 7.77076 59.6795 18.9244C59.6795 35.8049 59.1389 47.4244 54.2274 47.4244L54.2152 47.4122Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
                        <path
                            d="M94.1258 45.5049L88.0138 0.878052H87.948H84.3052L80.168 44.1805L74.0535 0.878052H67.9829L75.8068 48.1683H79.7857H80.7305H81.405L85.6834 17.2366L90.1737 48.1683H93.9504H94.4886H95.6355L102.045 0.878052H97.0527L94.1258 45.5049Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
                        <path
                            d="M153.578 0.33905C144.405 0.33905 142.45 8.91709 142.45 19.1195C142.45 34.7927 145.08 49.1805 153.578 49.1805C162.144 49.1805 164.779 34.7903 164.779 19.1195C164.762 8.91709 162.132 0.33905 153.578 0.33905ZM153.646 47.4122C148.722 47.4122 148.116 35.861 148.116 19.1195C148.116 7.83661 148.048 2.09515 153.578 2.09515C158.57 2.09515 159.108 7.77076 159.108 18.9244C159.096 35.8049 158.558 47.4244 153.634 47.4244L153.646 47.4122Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
                        <path
                            d="M138.325 48.2317L132.473 1.07806L128.908 1.00977L128.906 1.07806H128.774L121.82 36.1585L114.449 1.07806H108.663L110.502 6.59513L105.101 48.2317H109.403L111.364 9.80245L119.426 48.2317H121.374H122.049L128.801 8.77074L132.741 48.2317H138.325Z"
                            fill="{{ request()->route()->getName() == 'salon.index' ? 'white' : 'black' }}"/>
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
