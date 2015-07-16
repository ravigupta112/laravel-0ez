<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    <link rel="stylesheet" href="/plugins/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir('t/root/css/root.css') }}">
    @yield('css')
    @yield('js-top')
</head>
<body>
@include('root.partials.header')
@yield('body')
@include('root.partials.footer')
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/plugins/materialize/js/materialize.min.js"></script>
<script src="{{ elixir('t/root/js/root.js') }}"></script>
@yield('js-bottom')
</body>
</html>