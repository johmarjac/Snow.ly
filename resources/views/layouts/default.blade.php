<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="snow.ly">
        <link rel="stylesheet" type="text/css" href="/css/default.min.css">
        <title>Snow.ly - {Page}</title>
    </head>
    <body>
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
    <script src="{{asset('js/app.js')}}"></script>
</html>
