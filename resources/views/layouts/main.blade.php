<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'node_modules/bootstrap/dist/css/bootstrap.css'])
    <title>@yield('title')</title>
</head>
<body>
@include('includes.header')

<main>
    @yield('content')
</main>

@include('includes.footer')
</body>
</html>
