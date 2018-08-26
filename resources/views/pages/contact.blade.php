@extends('layouts/default')
@section('title', 'Contact')
@section('content')
<div id="contact">
    <form action="" method="post">
        <input type="text" placeholder="Name"/>
        <input type="email" placeholder="E-mail"/>
        <input type="text" placeholder="Subject"/>
        <textarea rows="4" placeholder="Message..."></textarea>
        <button type="submit">
            <i class="far fa-envelope"></i>
        </button>
    </form>
</div>
@endsection
