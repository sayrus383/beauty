<div class="row">
    <div class="col-12 header__col">
        <div class="header__left">
            <ul class="top-menu">
                <li class="top-menu__item"><a class="top-menu__link" href="{{ route('about') }}">О нас</a></li>
                <li class="top-menu__item"><a class="top-menu__link"
                                              href="{{ route('services.index') }}">Услуги</a></li>
                <li class="top-menu__item"><a class="top-menu__link" href="{{ route('founder') }}">Об Основателе</a>
                </li>
                <li class="top-menu__item"><a class="top-menu__link"
                                              href="{{ route('salon.index') }}#contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="logo header__logo"><a class="logo__link" href="{{ route('salon.index') }}">
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
        <div class="header__right"><a class="header__phone"
                                      href="tel:+{{ pretty_phone($settings->getField('phone_number', false)) }}">
                {{ $settings->getField('phone_number', false) }}
            </a><a
                class="header__shop" href="{{ $settings->getField('link', false) }}"><span>Интернет-магазин</span>
                <svg class="header__shop-icon" width="7" height="7">
                    <use xlink:href="/img/sprite.svg#link"></use>
                </svg>
            </a><a class="mobile-menu-toggle call-popup" href="#mobile-menu">
                <svg class="mobile-menu-toggle__icon" width="27" height="11">
                    <use xlink:href="img/sprite.svg#menu-toggle"></use>
                </svg>
            </a></div>
    </div>
</div>
