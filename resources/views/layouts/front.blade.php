<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!--bg-cover bg-center bg-no-repeat style="background-image: url(background/bg.jpg)"-->

    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-pink-300 to-black">
            @if(session()->has('success'))
            <div class="success-message text-green-500">
                {{ session()->get('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif
            @if (session('error'))
            <div class="error-message">
            {{ session('error') }}
            </div>
            @endif
            @include('layouts.frontNavigation')
            @yield('content')
            <script src="{{asset('js/dropdown.js')}}"></script>
            <script src="{{asset('js/booking.js')}}"></script>
            
            <div class="text-center mt-4">
            <!-- Copyright Information -->
            <p>&copy; 2024 FitBody. All rights reserved.</p>
            </div>
            <script src="{{asset('js/cancelBooking.js')}}"></script>
    </body>
</html>