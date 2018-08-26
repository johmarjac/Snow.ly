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
                </select>
            </div>
        </form>
    </div>
</div>
@endsection
