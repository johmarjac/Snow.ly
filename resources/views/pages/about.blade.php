@extends('layouts/default')
@section('content')
<div id="about">
    <div id="about-container">
        <div id="about-header">
            <div>
                <img src="https://avatars1.githubusercontent.com/u/30983493?s=460&v=4">
            </div>
            <span>{!! config('snowly.name') !!}</span>
        </div>
        <div id="about-content">
            {!! config('snowly.about_content') !!}
        </div>
    </div>
    <div id="about-menu" class="vue">
        <header-menu></header-menu>
    </div>
</div>
@endsection
