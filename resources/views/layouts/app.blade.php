<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--base(href="/")-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Services Page</title>
    <!-- SEO Meta -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicon -->
    <meta property="og:image" content="img/image.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
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
<div class="preloader" id="preloader"><img class="preloader__img" src="img/logo.svg" alt="logo"></div>
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12 header__col">
                <div class="header__left">
                    <ul class="top-menu">
                        <li class="top-menu__item"><a class="top-menu__link" href="#">О нас</a></li>
                        <li class="top-menu__item"><a class="top-menu__link"
                                                      href="{{ route('services.index') }}">Услуги</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#">Об Основателе</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="logo header__logo"><a class="logo__link" href="#">
                        <svg class="logo__img" width="85" height="111">
                            <use xlink:href="img/sprite.svg#logo"></use>
                        </svg>
                    </a></div>
                <div class="header__right"><a class="header__phone" href="tel:+77010276651">+ 7 701 027 66 51</a><a
                        class="header__shop" href="#"><span>Инетрнет-магазин</span>
                        <svg class="header__shop-icon" width="7" height="7">
                            <use xlink:href="img/sprite.svg#link"></use>
                        </svg>
                    </a><a class="mobile-menu-toggle call-popup" href="#mobile-menu">
                        <svg class="mobile-menu-toggle__icon" width="27" height="11">
                            <use xlink:href="img/sprite.svg#menu-toggle"></use>
                        </svg>
                    </a></div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 footer__col">
                <nav class="footer-menu">
                    <ul class="footer-menu__list">
                        <li class="footer-menu__item"><a class="footer-menu__link" href="#">О нас</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="{{ route('services.index') }}">Услуги</a>
                        </li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="#">Наша команда</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="#">Контакты</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="#">Интернет магазин</a></li>
                    </ul>
                </nav>
                <ul class="social social--grey footer__social">
                    <li class="social__item"><a class="social__link" href="#">
                            <svg class="social__icon" width="16" height="16">
                                <use xlink:href="img/sprite.svg#instagram"></use>
                            </svg>
                        </a></li>
                    <li class="social__item"><a class="social__link" href="#">
                            <svg class="social__icon" width="20" height="14">
                                <use xlink:href="img/sprite.svg#youtube"></use>
                            </svg>
                        </a></li>
                    <li class="social__item"><a class="social__link" href="#">
                            <svg class="social__icon" width="8" height="16">
                                <use xlink:href="img/sprite.svg#facebook"></use>
                            </svg>
                        </a></li>
                    <li class="social__item"><a class="social__link" href="#">
                            <svg class="social__icon" width="18" height="14">
                                <use xlink:href="img/sprite.svg#twitter"></use>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__bottom">
                    <div class="footer-copyright">© 2021 №1 Beauty. Все права защищены</div>
                    <ul class="footer-info">
                        <li class="footer-info__item"><a class="footer-info__link" href="#">Политика
                                конфиденциальности</a></li>
                        <li class="footer-info__item"><a class="footer-info__link" href="#">Медицинская лицензия</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
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
            <div class="logo mobile-menu__logo"><a class="logo__link" href="#">
                    <svg class="logo__img" width="70" height="92">
                        <use xlink:href="img/sprite.svg#logo"></use>
                    </svg>
                </a></div>
            <div class="popup__close">
                <svg class="popup__close-icon" width="20" height="20">
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </div>
        </div>
        <div class="popup__body">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">О нас</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link"
                                                 href="{{ route('services.index') }}">Услуги</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">Наша команда</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">Контакты</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">Инетрнет-магазин</a></li>
            </ul>
            <div class="mobile-menu__phone"><a class="mobile-menu__phone-link" href="tel:+77010276651">+ 7 701 027 66
                    51</a></div>
            <ul class="social mobile-menu__social">
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="social__icon" width="16" height="16">
                            <use xlink:href="img/sprite.svg#instagram"></use>
                        </svg>
                    </a></li>
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="social__icon" width="20" height="14">
                            <use xlink:href="img/sprite.svg#youtube"></use>
                        </svg>
                    </a></li>
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="social__icon" width="8" height="16">
                            <use xlink:href="img/sprite.svg#facebook"></use>
                        </svg>
                    </a></li>
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="social__icon" width="18" height="14">
                            <use xlink:href="img/sprite.svg#twitter"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
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
