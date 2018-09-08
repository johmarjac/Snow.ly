@extends('layouts/default')
@section('title', 'About')
@section('content')
<div id="about">
    <div id="about-container">
        <div id="about-header">
            <div>
                <img src="{{ $settings->avatar_url }}">
            </div>
            <span>{!! $settings->name !!}</span>
        </div>
        <div id="about-content">
            {!! $settings->about_content !!}
        </div>
    </div>
    <div id="about-menu" class="vue">
        <header-menu></header-menu>
    </div>
</div>
@endsection
