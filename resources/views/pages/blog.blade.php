@extends('layouts/default')
@section('content')
<div id="blog">
    <div id="blog-posts">
        @for($i = 0; $i<3; $i++)
            @component('components/blog/post')
                @slot('title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nam eius incidunt amet distinctio ullam sed nobis laudantium quod molestiae, beatae praesentium qui alias officia explicabo sunt possimus iure maxime.')
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
    </div>
</div>
@endsection
