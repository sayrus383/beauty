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

                    @if (!empty($service->price_list))
                        <h2 class="section-title section-title--grey services-article__sub-title">Прайс</h2>

                        @foreach(collect($service->price_list)->groupBy('name') as $name => $newServices)
                            <div class="faq-block {{ $loop->first ? 'on' : null }}">
                                <div class="faq-block__toggle">
                                    <h4 class="faq-block__title">{{ $name }}</h4>
                                    <svg class="faq-block__icon" width="21" height="12">
                                        <use xlink:href="/img/sprite.svg#faq-arrow"></use>
                                    </svg>
                                </div>
                                <div class="faq-block__hidden {{ $loop->first ? 'visible' : 'hidden' }}">
                                    <div class="faq-block__descr">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                @foreach($newServices as $newService)
                                                    <tr>
                                                        <td>{{ $newService['service_title'] ?? '-' }}</td>
                                                        <td>{{ $newService['service_priceZ'] ?? '-' }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </article>
@endsection
