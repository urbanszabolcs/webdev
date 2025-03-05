<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<title>Holló vadászbolt</title>
    <script src="{{ asset('assets/js/mainJs.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/js/filter.js') }}"></script>

</head>


@include('partials.navbar')

<div class="content">
    @yield('content')
</div>

<footer>
    <p>&copy; 2025 Webshop.<a href="https://github.com/Szabihun124" target="_blank">SzaSza</a></p>
</footer>

</body>

</html>
