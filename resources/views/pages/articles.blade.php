@extends('layouts/default')
@section('title', 'Articles')
@section('content')
<div id="articles">
    <div id="articles-menu">
        <reactive-form action="/articles/sort/{order}/{by}">
            <div class="input-group">
                <div class="input-group-label">
                    <span>Sort</span>
                </div>
                <select class="submit-on-change" name="order">
                    <option value="ascending" {{ $order == 'ascending' ? 'selected' : '' }}>ascending</option>
                    <option value="descending" {{ $order == 'descending' ? 'selected' : '' }}>descending</option>
                </select>
                <div class="input-group-label">
                    <span>by</span>
                </div>
                <select class="submit-on-change" name="by">
                    <option value="date" {{ $by == 'date' ? 'selected' : '' }}>date</option>
                    <option value="name" {{ $by == 'name' ? 'selected' : '' }}>name</option>
                    <option value="category" {{ $by == 'category' ? 'selected' : '' }}>category</option>
                </select>
            </div>
        </reactive-form>
        <reactive-form action="/articles/sort/{{$order}}/{{$by}}/{filter}" class="flexitem-right">
            <div class="input-group">
                <div class="input-group-label">
                    <span>Category</span>
                </div>
                <select class="submit-on-change" name="filter">
                    <option value="none" {{ $filter == 'none' ? 'selected' : '' }} >*</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}"  {{ $filter == $category ? 'selected' : '' }} >{{ $category }}</option>
                    @endforeach
                </select>
            </div>
        </reactive-form>
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
