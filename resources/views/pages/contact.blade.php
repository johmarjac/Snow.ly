@extends('layouts/default')
@section('content')
<div id="contact">
    <form action="" method="post">
        <div class="input-group">
            <div class="input-group-label">
                <span>Name: </span>
            </div>
            <input type="text" />
        </div>
        <div class="input-group">
            <div class="input-group-label">
                <span>Subject: </span>
            </div>
            <input type="text" />
        </div>
        <textarea rows="4" placeholder="Message..."></textarea>
        <button type="submit">
            <span>Send </span><i class="far fa-envelope"></i>
        </button>
    </form>
</div>
@endsection
