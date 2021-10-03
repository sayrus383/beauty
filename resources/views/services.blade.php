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
                        {!! $service->description !!}
                    </div>

                    @if ($service->services->isNotEmpty())
                        <h2 class="section-title section-title--grey services-article__sub-title">Прайс</h2>

                        @foreach($service->services as $newService)
                            <a class="faq-block call-popup" href="#popup-{{ $newService->id }}" data-bg="1">
                                <div class="faq-block__toggle">
                                    <h4 class="faq-block__title">
                                        {{ $newService->name }}
                                    </h4>

                                    @if ($newService->price)
                                        <p class="faq-block__title">
                                            {{ $newService->price }}
                                        </p>
                                    @endif

                                    <svg class="faq-block__icon" width="21" height="12">
                                        <use xlink:href="/img/sprite.svg#faq-arrow"></use>
                                    </svg>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </article>

    @foreach($service->services as $newService)
        <div class="popup" id="popup-{{ $newService->id }}">
            <div class="popup__inner">
                <div class="popup__header">
                    <div class="popup__close">
                        <svg class="popup__close-icon" width="20" height="20">
                            <use xlink:href="img/sprite.svg#close"></use>
                        </svg>
                    </div>
                    <h3 class="popup__title">{{ $newService->name }}</h3>
                </div>
                @if ($newService->image_url)
                    <picture class="popup__picture">
                        <img class="popup__img" src="{{ $newService->image_url }}"
                             srcset="{{ $newService->image_url }} 2x" alt="alt">
                    </picture>
                @endif

                <div class="popup__body">
                    <div class="popup__descr">
                        {!! $newService->description !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
