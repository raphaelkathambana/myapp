<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'myApp') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js', './node_modules/ckeditor4/ckeditor.js'])
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script type="module">
        CKEDITOR.replace( 'editor' );
    </script>
</head>

<body>
    @include('layout.navbar')
    <div>
        @yield('content')
    </div>
</body>

</html>
