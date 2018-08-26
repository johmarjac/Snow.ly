@extends('layouts/default')
@section('title', 'Projects')
@section('content')
<div id="projects">
    @if(count($projects)>0)
        @foreach($projects as $project)
            @component('components/projects/project')
                @slot('project', $project)
            @endcomponent
        @endforeach
    @else
        <span>There are no projects!</span>
    @endif
</div>
@endsection
