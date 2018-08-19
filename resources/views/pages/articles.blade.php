@extends('layouts/default')
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
                    <option value="">date</option>
                    <option value="">title</option>
                    <option value="">tags</option>
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
                    <option value="web">Web</option>
                    <option value="software">Software</option>
                </select>
            </div>
        </form>
    </div>
    <div id="articles-wrapper">
        @foreach($articles as $article)
            @component('components/articles/article')
                @slot('id', $article->id)
                @slot('name', $article->name)
                @slot('thumbnail', $article->thumbnail)
                @slot('description', $article->description)
            @endcomponent
        @endforeach
    </div>
</div>
@endsection
