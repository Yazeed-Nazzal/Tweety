<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    {{--    <link href="{{ asset('css/font.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   @yield('bootstrap')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<header>

    <nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6 px-10">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <i class="fab fa-twitter pr-1 text-xl" style="color:#FFF; "></i>
            <a style="color: white; text-decoration: none" href="/"> <span class="font-semibold text-xl tracking-tight">Tweety</span></a>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

    </nav>
</header>
{{ $slot }}
</body>
</html>
