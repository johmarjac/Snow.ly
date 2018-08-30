@extends('layouts/default')
@section('title', 'Contact')
@section('content')
<div id="contact">
    <form action="/message" method="post">
        @csrf
        <input type="text" required name="name" placeholder="Name"/>
        <input type="email" required name="email" placeholder="E-mail"/>
        <input type="text" required name="subject" placeholder="Subject"/>
        <textarea rows="4" required name="message" placeholder="Message..."></textarea>
        <button type="submit">
            <i class="far fa-envelope"></i>
        </button>
    </form>
</div>
@endsection
