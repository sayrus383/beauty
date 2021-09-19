@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="mention-article">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <h1 class="section-title mention-article__title">
                        {{ $post->title }}
                    </h1>
                    <div class="mention-article__date">
                        {{ $post->published_at->format('d') }}
                        {{ months_name($post->published_at->format('m')) }}
                        {{ $post->published_at->format('Y') }}
                    </div>
                    <picture class="mention-article__picture"><img class="mention-article__img"
                                                                   src="{{ $post->image_url }}"
                                                                   srcset="{{ $post->image_url }} 2x"
                                                                   alt="{{ $post->name }}">
                    </picture>
                    <div class="mention-article__text">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
