@extends('layouts/default')
@section('content')
<div id="projects">
    @for ($i=0; $i < 10; $i++)
        @component('components/projects/project')
            @slot('title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nam eius incidunt amet distinctio ullam sed nobis laudantium quod molestiae, beatae praesentium qui alias officia explicabo sunt possimus iure maxime.')
            @slot('language', 'C#')
            @slot('description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')
            @slot('stars', 500)
            @slot('forks', 100)
            @slot('views', 10000)
        @endcomponent
    @endfor
</div>
@endsection
