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
        <div class="logo header__logo"><a class="logo__link" href="{{ route('salon.index') }}">
                <svg class="logo__img" width="85" height="111">
                    <use xlink:href="/img/sprite.svg#logo"></use>
                </svg>
            </a></div>
        <div class="header__right"><a class="header__phone" href="tel:+77010276651">+ 7 701 027 66 51</a><a
                class="header__shop" href="#"><span>Интернет-магазин</span>
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