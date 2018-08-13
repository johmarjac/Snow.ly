<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="snow.ly">
        <link rel="stylesheet" type="text/css" href="css/default.min.css">
        <title>Snow.ly - {Page}</title>
    </head>
    <body>
        <div class="alert">
            <div class="alert-header">

            </div>
        </div>
        @include('components/nav')
        <div id="content">
            @yield('content')
        </div>
        @include('components/footer')
    </body>
</html>
