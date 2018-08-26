@extends('layouts/default')
@section('title', 'Articles')
@section('content')
<div id="articles">
    <div id="articles-menu">
        <form action="">
            <div class="input-group">
                <div class="input-group-label">
                    <span>Sort</span>
                </div>
                <select name="order">
                    <option value="ascending">ascending</option>
                    <option value="descending">descending</option>
                </select>
                <div class="input-group-label">
                    <span>by</span>
                </div>
                <select name="by">
                    <option value="date">date</option>
                    <option value="title">title</option>
                    <option value="category">category</option>
                </select>
            </div>
        </form>
        <form action="" class="flexitem-right">
            <div class="input-group">
                <div class="input-group-label">
                    <span>Category</span>
                </div>
                <select name="category">
                    <option value="*">*</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
    <div id="articles-wrapper">
        @if(count($articles)>0)
            @foreach($articles as $article)
                @component('components/articles/article')
                    @slot('article', $article)
                @endcomponent
            @endforeach
        @else
            <span>There are no articles!</span>
        @endif
    </div>
</div>
@endsection
