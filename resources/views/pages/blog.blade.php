@extends('layouts/default')
@section('title', 'Blog')
@section('content')
<div id="blog">
    <div id="blog-posts">
        @if(count($posts)>0)
            @foreach($posts as $post)
                @component('components/blog/post')
                    @slot('post', $post)
                @endcomponent
            @endforeach
        @else
            <span>There are no posts!</span>
        @endif
    </div>
    <div id="blog-sidepanel">
        <reactive-form action="/blog/sort/{order}/{by}">
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
                    <option value="title" {{ $by == 'title' ? 'selected' : '' }}>title</option>
                </select>
            </div>
        </reactive-form>
    </div>
</div>
@endsection
