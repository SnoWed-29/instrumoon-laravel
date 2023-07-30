<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js','public/css/style.css','public/js/script.js'])
</head>
<body>
    <div id="app">
        <nav class="p-2 bg-dark">
            <div class="container mx-auto w-9/12 flex items-center justify-between">
                <div>
                    <img src="{{ asset('images/cover.png') }}" alt="logo" width="180px">
                </div>
                <div class="space-x-6 items-center">
                    @guest
                        @if (Route::has('login'))    
                            <a href="{{ route('login') }}" class="text-white hover:text-gold">Login</a>
                        @endif
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white hover:text-gold">Register</a>
                        @endif
                        @else 
                        <a href="#" class="text-white hover:text-gold">{{ Auth::user()->name }}</a>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="text-white hover:text-gold">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </nav>
        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
