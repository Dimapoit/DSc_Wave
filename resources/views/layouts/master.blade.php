<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
@include("partials._menu")

@yield('content')

@include('partials._footer')

</body>
</html>
