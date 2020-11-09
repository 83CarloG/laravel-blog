<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')  }}">
    <title>@yield('page-title', 'Blog')</title>
</head>
<body>
    <div class="d-flex flex-column wrapper container">

            @include('layouts.partials.header')

            @yield('page-content')

            @include('layouts.partials.footer')

    </div>
</body>
</html>
