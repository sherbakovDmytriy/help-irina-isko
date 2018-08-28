@extends('layouts.main')

@section('title')
    <title>Статья</title>
@stop


@section('body')

    <section class="blog content content_sm">
        <h2 class="section__header">Блог</h2>

        <div class="article-list">
            <a href="#" class="article-list__item">
                <div class="article-list__item_image"><img src="img/1.jpg" alt="" height="100%"></div>
                <div class="article-list__item_title">
                    <span>Lorem Ipsum</span>
                </div>
            </a>

            <a href="#" class="article-list__item">
                <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
                <div class="article-list__item_title">
                    <span>Lorem Ipsum</span>
                </div>
            </a>

            <a href="#" class="article-list__item">
                <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
                <div class="article-list__item_title">
                    <span>Lorem Ipsum</span>
                </div>
            </a>

            <a href="#" class="article-list__item">
                <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
                <div class="article-list__item_title">
                    <span>Lorem Ipsum</span>
                </div>
            </a>
        </div>
    </section>

@stop