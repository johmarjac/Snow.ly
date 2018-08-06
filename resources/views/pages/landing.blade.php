@extends('layouts/default')
@section('page-title', 'Landing Page')

@section('page-body')
<div id="landing-container">
    <span>{{ env('APP_NAME') }}</span>
    <span>A content management system to help programmers focus on what matters.</span>
    <div id="landing-navbar">
        <span><a href="home"><i class="fas fa-home"></i> Home</a></span>
        <span><a href="#"><i class="fas fa-sticky-note"></i> Scribblings</a></span>
        <span><a href="#"><i class="fas fa-paperclip"></i> Articles</a></span>
        <span><a href="#"><i class="fas fa-project-diagram"></i> Projects</a></span>
        <span><a href="#"><i class="fas fa-user-tie"></i> About</a></span>
        <span><a href="#"><i class="fas fa-envelope"></i> Contact</a></span>
    </div>
</div>
@endsection
