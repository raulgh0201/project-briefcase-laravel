<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
    @yield('styles')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @yield('scripts')


</head>

<body>
    @if(Auth::check() && Auth::user()->isAdmin == true)
    @include('layouts.header.admin')
    @else
    @include('layouts.header.user')
    @endif
    <div class="main-container">
        <section id="content">
            @yield('content')
        </section>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>