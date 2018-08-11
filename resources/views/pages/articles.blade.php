@extends('layouts/default')
@section('content')
<div id="articles">
    <div id="articles-menu">
        <form action="">
            <div id="input-group">
                <div id="input-group-label">
                    <span>Sort</span>
                </div>
                <select name="order">
                    <option value="ascending">ascending</option>
                    <option value="descending">descending</option>
                </select>
                <div id="input-group-label">
                    <span>by</span>
                </div>
                <select id="test" name="by">
                    <option value="">date</option>
                    <option value="">title</option>
                    <option value="">tags</option>
                </select>
            </div>
        </form>
        <form action="" class="flexitem-right">
            <div id="input-group">
                <div id="input-group-label">
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
        @for ($i=0; $i < 10; $i++)
            @component('components/articles/article')
                @slot('title', 'Article Title')
                @slot('image', 'https://i.pinimg.com/originals/af/bc/21/afbc21512376546968e281a61d47260b.jpg')
                @slot('description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sint qui, labore, aspernatur nemo autem nisi cumque, suscipit, ipsa et voluptatem quibusdam harum necessitatibus incidunt! Repellat quas dignissimos nulla aut?')
            @endcomponent
        @endfor
    </div>
</div>
@endsection
