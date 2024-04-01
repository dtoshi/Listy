<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Listy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Listy: gestor de tareas personalizado.">
    <meta name="author" content="Angie Ortiz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/nav_main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/media_query.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer_main.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @yield('styles')
</head>

<body>

    @yield('header')

    @yield('content')

    <footer class="footer">
        @yield('footer')
    </footer>
    <script src="https://kit.fontawesome.com/a1a5eb266e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+nWxe63J0lPEQ6gFWpi1MquVdAyjUar5+76PVCm" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k9D0Dp+s5PirhXdQrU9LMKb0DcERw4TEyHivgmeqdL4IH4Z2jZXpe3b/tqQoxxFw" crossorigin="anonymous">
    </script>

    @yield('scripts')
</body>

</html>