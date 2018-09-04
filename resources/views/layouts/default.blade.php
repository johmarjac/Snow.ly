<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/default.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script defer src="{{asset('js/app.js')}}"></script>
        <script defer src="/js/core.js"></script>
        <title>{{ config('snowly.page_name') }} - @yield('title', '{Page}')</title>
    </head>
    <body>
        @if(session('alert'))
            @component('components/alert')
                @slot('message', session('alert')['text'])
                @slot('type', session('alert')['type'])
            @endcomponent
        @endif
        @include('components/nav')
        <div id="content" class="vue">
            @yield('content')
        </div>
        @include('components/footer')
    </body>
</html>
