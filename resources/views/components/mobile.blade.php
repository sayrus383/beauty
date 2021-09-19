<div class="popup__body">
    <ul class="mobile-menu__list">
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('about') }}">О нас</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('services.index') }}">Услуги</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">Наша команда</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">Контакты</a></li>
        <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ $settings->getField('link', false) }}">
                Интернет-магазин</a>
        </li>
    </ul>
    <div class="mobile-menu__phone"><a class="mobile-menu__phone-link"
                                       href="tel:+{{ pretty_phone($settings->getField('phone_number', false)) }}">
            {{ $settings->getField('phone_number', false) }}
        </a></div>

    <ul class="social mobile-menu__social">
        @if ($settings->getField('instagram', false))
            <li class="social__item"><a class="social__link"
                                        href="{{ $settings->getField('instagram', false) }}">
                    <svg class="social__icon" width="16" height="16">
                        <use xlink:href="/img/sprite.svg#instagram"></use>
                    </svg>
                </a></li>
        @endif
        @if ($settings->getField('youtube', false))
            <li class="social__item"><a class="social__link"
                                        href="{{ $settings->getField('youtube', false) }}">
                    <svg class="social__icon" width="20" height="14">
                        <use xlink:href="/img/sprite.svg#youtube"></use>
                    </svg>
                </a></li>
        @endif
        @if ($settings->getField('facebook', false))
            <li class="social__item"><a class="social__link"
                                        href="{{ $settings->getField('facebook', false) }}">
                    <svg class="social__icon" width="8" height="16">
                        <use xlink:href="/img/sprite.svg#facebook"></use>
                    </svg>
                </a></li>
        @endif
        @if ($settings->getField('twitter', false))
            <li class="social__item"><a class="social__link"
                                        href="{{ $settings->getField('twitter', false) }}">
                    <svg class="social__icon" width="18" height="14">
                        <use xlink:href="/img/sprite.svg#twitter"></use>
                    </svg>
                </a></li>
        @endif
    </ul>
</div>
