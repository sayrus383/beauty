@extends('layouts.app')

@section('title', $variable->getField('title') ?? 'О нас')

@section('content')
    <!-- About Article -->
    <article class="about-article">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-2 col-md-6">
                    <picture class="about-article__picture about-article__picture--left"><img class="about-article__img"
                                                                                              src="img/about-article-1.jpg"
                                                                                              srcset="img/about-article-1@2x.jpg 2x"
                                                                                              alt="alt"></picture>
                    <div class="about-article__slogan hidden-sm">
                        <p>
                            {{ $variable->getField('slogan') }}
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <h1 class="section-title about-article__title">
                        {{ $variable->getField('title') ?? 'О нас' }}
                    </h1>
                    <div class="about-article__text">
                        <p>
                            {{ $variable->getField('text') }}
                        </p>
                    </div>
                    <picture class="about-article__picture about-article__picture--right"><img
                            class="about-article__img" src="img/about-article-2.jpg"
                            srcset="img/about-article-2@2x.jpg 2x" alt="alt"></picture>
                    <div class="about-article__slogan visible-sm">
                        <p>
                            {{ $variable->getField('slogan') }}
                        </p>
                    </div>
                    <div class="about-article__text">
                       {!! $variable->getField('description') !!}
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Partners Section-->
    <section class="partners-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title section-title--grey partners-section__title">партнеры</h2>
                    <div class="partners-logos">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-1.png"
                                                                              srcset="img/partners/logo-1@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-2.png"
                                                                              srcset="img/partners/logo-2@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-3.png"
                                                                              srcset="img/partners/logo-3@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-4.png"
                                                                              srcset="img/partners/logo-4@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-5.png"
                                                                              srcset="img/partners/logo-5@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-6.png"
                                                                              srcset="img/partners/logo-6@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-7.png"
                                                                              srcset="img/partners/logo-7@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-8.png"
                                                                              srcset="img/partners/logo-8@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-9.png"
                                                                              srcset="img/partners/logo-9@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-10.png"
                                                                              srcset="img/partners/logo-10@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-11.png"
                                                                              srcset="img/partners/logo-11@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 partners-logos__col">
                                <picture class="partners-logos__picture"><img class="partners-logos__img"
                                                                              src="img/partners/logo-12.png"
                                                                              srcset="img/partners/logo-12@2x.png 2x"
                                                                              alt="alt"></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
