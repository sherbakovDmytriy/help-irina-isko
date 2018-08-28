@extends('layouts.main')

@section('title')
    <title>Статья</title>
@stop


@section('body')

    <section class="blog content content_sm">
        <h2 class="section__header">{{ $post->title }}</h2>

        <div class="article-list__item article-list__item_large">
            <div class="article-list__item_image">
                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" width="100%">
            </div>
            <div class="article-list__item_text">
                <span>{!! $post->text !!}</span>
            </div>
        </div>
    </section>

@stop