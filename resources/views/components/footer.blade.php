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
                        <li class="footer-menu__item"><a class="footer-menu__link"
                                                         href="{{ $settings->getField('link', false) }}">Интернет
                                магазин</a></li>
                    </ul>
                </nav>
                <ul class="social social--grey footer__social">
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
