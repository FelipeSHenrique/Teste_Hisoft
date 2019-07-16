<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HISOFT - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="http://allfont.net/allfont.css?fonts=star-jedi" rel="stylesheet" type="text/css" />

</head>
<body>

    <div id="header">
        <div class="title text-center">
            STAR WARS
        </div>
   </div>
    
    <div id="app" class="page-{{ basename(url()->current()) }}">
        @yield('content')
    </div>

    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>