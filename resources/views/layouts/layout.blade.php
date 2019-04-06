<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big Red</title>
    @section('script')
        @include('layouts.common_scripts')
    @show
    @section('style')
        @include('layouts.common_styles')
    @show
</head>
<body>
<header>
    @yield('header')
</header>
    @yield('content')
<footer>
    @yield('footer')
</footer>
</body>
</html>



