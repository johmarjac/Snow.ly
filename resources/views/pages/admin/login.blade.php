@extends('layouts/admin')
@section('content')

@if(session('alert'))
    <br>
    <div class="alert {{ session('alert')['type'] }} d-flex p-2" role="alert">
        {{ session('alert')['text'] }}
    </div>
@endif

<div class="row mt-5">
    <form class="col-5 mx-auto row" action="/signin" method="POST">
        @csrf
        <h4 class="mx-auto mb-4">Sign-in</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">User</span>
            </div>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="password" class="form-control" name="password">
        </div>
        <button class="btn btn-success btn-block">Submit</button>
    </form>
</div>

@endsection
