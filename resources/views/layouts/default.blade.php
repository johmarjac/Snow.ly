<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="snow.ly">
        <link rel="stylesheet" href="css/default.min.css">
        <title>@yield('page-title') - {{ env('APP_NAME') }}</title>
    </head>
    <body>
        @yield('page-body')
    </body>
</html>
