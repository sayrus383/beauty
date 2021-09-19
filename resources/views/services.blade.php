@extends('layouts.app')

@section('title', 'Услуги')

@section('content')
    <!-- Services Article -->
    <article class="services-article">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title services-article__title">
                        Услуги
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <nav class="services-nav">
                        <ul class="services-nav__list">
                            @foreach($services as $serv)
                                <li class="services-nav__item {{ $serv->id == $service->id ? 'is-active' : null }}">
                                    <a class="services-nav__link"
                                       href="{{ route('services.index', ['id' => $serv->id]) }}">{{ $serv->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-6 col-md-6">
                    <picture class="services-article__picture"><img class="services-article__img"
                                                                    src="{{ $service->image_url }}"
                                                                    srcset="{{ $service->image_url }} 2x"
                                                                    alt="{{ $service->name }}">
                    </picture>
                    <div class="services-article__text">
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                    <h2 class="section-title section-title--grey services-article__sub-title">Прайс</h2>
                    <div class="faq-block on">
                        <div class="faq-block__toggle">
                            <h4 class="faq-block__title">Маникюр</h4>
                            <svg class="faq-block__icon" width="21" height="12">
                                <use xlink:href="img/sprite.svg#faq-arrow"></use>
                            </svg>
                        </div>
                        <div class="faq-block__hidden visible">
                            <div class="faq-block__descr">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Экспресс-маникюр</td>
                                            <td>1800 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Женский маникюр</td>
                                            <td>2500 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Мужской маникюр</td>
                                            <td>от 2700 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Детский маникюр (до 14 лет)</td>
                                            <td>1400 ₽</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-block">
                        <div class="faq-block__toggle">
                            <h4 class="faq-block__title">Моделирование ногтей</h4>
                            <svg class="faq-block__icon" width="21" height="12">
                                <use xlink:href="img/sprite.svg#faq-arrow"></use>
                            </svg>
                        </div>
                        <div class="faq-block__hidden hidden">
                            <div class="faq-block__descr">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Экспресс-маникюр</td>
                                            <td>1800 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Женский маникюр</td>
                                            <td>2500 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Мужской маникюр</td>
                                            <td>от 2700 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Детский маникюр (до 14 лет)</td>
                                            <td>1400 ₽</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-block">
                        <div class="faq-block__toggle">
                            <h4 class="faq-block__title">Педикюр</h4>
                            <svg class="faq-block__icon" width="21" height="12">
                                <use xlink:href="img/sprite.svg#faq-arrow"></use>
                            </svg>
                        </div>
                        <div class="faq-block__hidden hidden">
                            <div class="faq-block__descr">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Экспресс-маникюр</td>
                                            <td>1800 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Женский маникюр</td>
                                            <td>2500 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Мужской маникюр</td>
                                            <td>от 2700 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Детский маникюр (до 14 лет)</td>
                                            <td>1400 ₽</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-block">
                        <div class="faq-block__toggle">
                            <h4 class="faq-block__title">Покрытие</h4>
                            <svg class="faq-block__icon" width="21" height="12">
                                <use xlink:href="img/sprite.svg#faq-arrow"></use>
                            </svg>
                        </div>
                        <div class="faq-block__hidden hidden">
                            <div class="faq-block__descr">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Экспресс-маникюр</td>
                                            <td>1800 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Женский маникюр</td>
                                            <td>2500 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Мужской маникюр</td>
                                            <td>от 2700 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Детский маникюр (до 14 лет)</td>
                                            <td>1400 ₽</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-block">
                        <div class="faq-block__toggle">
                            <h4 class="faq-block__title">Cagel</h4>
                            <svg class="faq-block__icon" width="21" height="12">
                                <use xlink:href="img/sprite.svg#faq-arrow"></use>
                            </svg>
                        </div>
                        <div class="faq-block__hidden hidden">
                            <div class="faq-block__descr">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Экспресс-маникюр</td>
                                            <td>1800 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Женский маникюр</td>
                                            <td>2500 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Мужской маникюр</td>
                                            <td>от 2700 ₽</td>
                                        </tr>
                                        <tr>
                                            <td>Детский маникюр (до 14 лет)</td>
                                            <td>1400 ₽</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
