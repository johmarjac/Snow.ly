@extends('layouts/default')
@section('content')
<div id="blog">
    <div id="blog-posts">
        @for($i = 0; $i<3; $i++)
            @component('components/blog/post')
                @slot('title', 'Title')
                @slot('link', '#')
                @slot('author', 'Author')
                @slot('avatar', 'https://avatars1.githubusercontent.com/u/30983493?s=460&v=4')
                @slot('text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur neque dolores corrupti repellat quibusdam ullam nesciunt nobis ex, amet, tenetur repudiandae suscipit, laborum cum dicta non soluta nemo! Earum, soluta.')
                @slot('date', $date)
                @slot('tags')
                    @for ($j=0; $j < 5; $j++)
                        @component('components/tag')
                            @slot('tag', 'csharp ' . $j)
                        @endcomponent
                    @endfor
                @endslot
            @endcomponent
        @endfor
    </div>
    <div id="blog-sidepanel">
        <form action="">
            <div id="input-group">
                <div id="input-group-label">
                    Sort
                </div>
                <select name="order">
                    <option value="ascending">Ascending</option>
                    <option value="descending">Descending</option>
                </select>
                <div id="input-group-label">
                    by
                </div>
                <select name="by">
                    <option value="">Date</option>
                    <option value="">Title</option>
                    <option value="">Tags</option>
                </select>
            </div>
        </form>
    </div>
</div>
@endsection
