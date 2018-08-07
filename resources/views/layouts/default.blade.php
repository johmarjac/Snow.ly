<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/default.css">
        <title>{Website Name} - {Page}</title>
    </head>
    <body>
        @include('components/alerts')
        @include('components/nav')
        @yield('content')
        @include('components/footer')
    </body>
</html>
