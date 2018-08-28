@extends('layouts.main')

@section('title')
    <title>Блог</title>
@stop


@section('body')

    <section class="blog content content_sm">
        <h2 class="section__header">Блог</h2>

        <div class="article-list">

            @foreach($posts as $post)
                <a href="{{ url('article', $post->id) }}" class="article-list__item">
                    <div class="article-list__item_image">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" height="100%">
                    </div>
                    <div class="article-list__item_title">
                        <span>{{ $post->title }}</span>
                    </div>
                </a>
            @endforeach

        </div>
    </section>

@stop