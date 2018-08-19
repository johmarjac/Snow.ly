<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="snow.ly">
        <link rel="stylesheet" type="text/css" href="/css/default.min.css">
        <script src="{{asset('js/app.js')}}"></script>
        <title>Snow.ly - {Page}</title>
    </head>
    <body id="app">
        @if(false)
            @component('components/alert')
                @slot('message', "Post made.")
            @endcomponent
        @endif
        @include('components/nav')
        <div id="content">
            @yield('content')
        </div>
        @include('components/footer')
    </body>
</html>
