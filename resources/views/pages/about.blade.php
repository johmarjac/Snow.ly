@extends('layouts/default')
@section('title', 'About')
@section('content')
<div id="about">
    <div id="about-container">
        <div id="about-header">
            <div>
                <img src="{{ config('snowly.avatar_url') }}">
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
