@extends('layouts/default')
@section('content')
<div id="article-show">
    <div id="article-show-container">
        <div id="article-show-header">
            <span>{{ $article->name }}</span>
        </div>
        <div id="article-show-content">
            {!! $article->content !!}
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
            <ol>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ol>
        </div>
        <div id="article-show-footer">
            <span id="article-show-footer-date"><i class="far fa-calendar-alt"></i><span>{{ $article->created_at_formatted }}</span></span>
            <div id="article-show-footer-tags">
                @for ($j=0; $j < 5; $j++)
                    @component('components/tag')
                        @slot('tag', 'csharp ' . $j)
                    @endcomponent
                @endfor
            </div>
        </div>
    </div>
    <div id="article-show-menu" class="vue">
        <article-headermenu></article-headermenu>
    </div>
</div>
@endsection
