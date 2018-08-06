@extends('layouts/default')
@section('page-body')
<div id="grid">
    @include('elements/navbar')
    @yield('page-content')
    @include('elements/footer')
</div>
@endsection
