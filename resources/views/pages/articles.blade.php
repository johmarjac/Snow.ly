@extends('layouts/default')
@section('content')
<div id="articles">
    <div id="articles-menu">
        <form action="">
            <div id="input-group">
                <div id="input-group-label">
                    Sort
                </div>
                <select name="order">
                    <option value="ascending">ascending</option>
                    <option value="descending">descending</option>
                </select>
                <div id="input-group-label">
                    by
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
                    Category
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
                @slot('description', 'Example description for an article.')
            @endcomponent
        @endfor
    </div>
</div>
@endsection
