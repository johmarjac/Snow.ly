@extends('layouts/default')
@section('title', $article->name)
@section('content')
<div id="article-show">
    <div id="article-show-container">
        <div id="article-show-header">
            <span>{{ $article->name }}</span>
            <a class="flexitem-right" href="/search/?keywords={{ $article->category }}" name="keywords">{{ $article->category }}</a>
        </div>
        <div id="article-show-content">
            {!! $article->content !!}
        </div>
        <div id="article-show-footer">
            <span id="article-show-footer-date">
                <i class="far fa-calendar-alt"></i>
                <span>{{ $article->created_at_formatted }}</span>
            </span>
            <div id="article-show-footer-tags">
                @foreach ($article->tags as $tag)
                    @component('components/tag')
                        @slot('tag', $tag)
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
    <div id="article-show-menu" class="vue">
        <div id="article-show-menu-image">
            <img src="{{ $article->thumbnail }}"/>
        </div>
        <header-menu></header-menu>
    </div>
</div>
@endsection
