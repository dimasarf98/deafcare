<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/igyxwxutzv0bw4poaambjtq4e1dvx03yupgu3fxxsnid2165/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div id="app" class="container-phone mx-auto" style="background-color: #fff; min-height:100vh">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
