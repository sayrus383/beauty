<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--base(href="/")-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Main Page</title>
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
<!-- Main Page -->
<main class="main-page">
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-12 main-header__col">
                    <div class="main-header__phone"><a class="main-header__phone-link" href="tel:+74994505050">+7 499 450 50 50</a></div>
                    <div class="logo main-header__logo"><a class="logo__link" href="#">
                            <svg class="logo__img" width="85" height="111">
                                <use xlink:href="img/sprite.svg#logo"></use>
                            </svg></a></div>
                    <ul class="social main-header__social">
                        <li class="social__item"><a class="social__link" href="#">
                                <svg class="social__icon" width="16" height="16">
                                    <use xlink:href="img/sprite.svg#instagram"></use>
                                </svg></a></li>
                        <li class="social__item"><a class="social__link" href="#">
                                <svg class="social__icon" width="20" height="14">
                                    <use xlink:href="img/sprite.svg#youtube"></use>
                                </svg></a></li>
                        <li class="social__item"><a class="social__link" href="#">
                                <svg class="social__icon" width="8" height="16">
                                    <use xlink:href="img/sprite.svg#facebook"></use>
                                </svg></a></li>
                        <li class="social__item"><a class="social__link" href="#">
                                <svg class="social__icon" width="18" height="14">
                                    <use xlink:href="img/sprite.svg#twitter"></use>
                                </svg></a></li>
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
                    <picture class="main-slide__picture"><img class="main-slide__img" src="img/main-bg-1.jpg" srcset="img/main-bg-1@2x.jpg 2x" alt="alt"></picture>
                    <div class="container main-slide__container">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-slide__text">
                                    <p>№1 Beauty — уникальные пространства, в которых слились в единое целое высококачественный сервис и искусство создания истинно элегантных и стильных образов.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-card" href="#">
                                    <picture class="main-slide-card__picture"><img class="main-slide-card__img" src="img/main-slide-card-1.jpg" srcset="img/main-slide-card-1@2x.jpg 2x" alt="alt"></picture>
                                    <div class="main-slide-card__descr">
                                        <div class="main-slide-card__title">Укладка</div>
                                        <div class="main-slide-card__price">От 5.000 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-card" href="#">
                                    <picture class="main-slide-card__picture"><img class="main-slide-card__img" src="img/main-slide-card-2.jpg" srcset="img/main-slide-card-2@2x.jpg 2x" alt="alt"></picture>
                                    <div class="main-slide-card__descr">
                                        <div class="main-slide-card__title">Укладка</div>
                                        <div class="main-slide-card__price">От 5.000 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-card" href="#">
                                    <picture class="main-slide-card__picture"><img class="main-slide-card__img" src="img/main-slide-card-3.jpg" srcset="img/main-slide-card-3@2x.jpg 2x" alt="alt"></picture>
                                    <div class="main-slide-card__descr">
                                        <div class="main-slide-card__title">Укладка</div>
                                        <div class="main-slide-card__price">От 5.000 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-card" href="#">
                                    <picture class="main-slide-card__picture"><img class="main-slide-card__img" src="img/main-slide-card-4.jpg" srcset="img/main-slide-card-4@2x.jpg 2x" alt="alt"></picture>
                                    <div class="main-slide-card__descr">
                                        <div class="main-slide-card__title">Укладка</div>
                                        <div class="main-slide-card__price">От 5.000 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-4">
                                <div class="main-slide-go"><a class="main-slide-go__link" href="#">Перейти на <br>страницу Салона
                                        <svg class="main-slide-go__icon" width="15" height="9">
                                            <use xlink:href="img/sprite.svg#arrow-bottom"></use>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="main-slide">
                    <picture class="main-slide__picture"><img class="main-slide__img" src="img/main-bg-2.jpg" srcset="img/main-bg-2@2x.jpg 2x" alt="alt"></picture>
                    <div class="container main-slide__container">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-slide__text">
                                    <p>№1 Beauty — уникальные пространства, в которых слились в единое целое высококачественный сервис и искусство создания истинно элегантных и стильных образов.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-product" href="#">
                                    <picture class="main-slide-product__picture"><img class="main-slide-product__img" src="img/main-product-1.png" srcset="img/main-product-1@2x.png 2x" alt="alt"></picture>
                                    <div class="main-slide-product__descr">
                                        <div class="main-slide-product__title">Kevin.Murphy HYDRATE-ME</div>
                                        <div class="main-slide-product__price">16 650.00 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-product" href="#">
                                    <picture class="main-slide-product__picture"><img class="main-slide-product__img" src="img/main-product-2.png" srcset="img/main-product-2@2x.png 2x" alt="alt"></picture>
                                    <div class="main-slide-product__descr">
                                        <div class="main-slide-product__title">IS CLINICAL Youth serum</div>
                                        <div class="main-slide-product__price">16 650.00 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-product" href="#">
                                    <picture class="main-slide-product__picture"><img class="main-slide-product__img" src="img/main-product-3.png" srcset="img/main-product-3@2x.png 2x" alt="alt"></picture>
                                    <div class="main-slide-product__descr">
                                        <div class="main-slide-product__title">Kevin.Murphy Youth serum</div>
                                        <div class="main-slide-product__price">16 650.00 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-2 main-slide__col"><a class="main-slide-product" href="#">
                                    <picture class="main-slide-product__picture"><img class="main-slide-product__img" src="img/main-product-4.png" srcset="img/main-product-4@2x.png 2x" alt="alt"></picture>
                                    <div class="main-slide-product__descr">
                                        <div class="main-slide-product__title">Kevin.Murphy Youth serum</div>
                                        <div class="main-slide-product__price">16 650.00 ₽</div>
                                    </div></a></div>
                            <div class="col-lg-4">
                                <div class="main-slide-go"><a class="main-slide-go__link" href="#">Перейти на <br>страницу магазина
                                        <svg class="main-slide-go__icon" width="15" height="9">
                                            <use xlink:href="img/sprite.svg#arrow-bottom"></use>
                                        </svg></a></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlJovNLyxttI7YFEZb3Ue2mGXCyc_2vfs&amp;callback=initMap" async defer></script>
</body>
</html>
