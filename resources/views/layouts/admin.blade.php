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
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link rel="icon" type="image/x-icon" href="{{asset('icons/logo2.png')}}">

    </head>
    <body class="font-sans antialiased bg-gray-100">
            @if(session()->has('success'))
            <marquee direction="right" scrollamount="15" loop="1" class="success-message text-green-500">
                {{ session()->get('success') }}
            </marquee>
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
            <marquee direction="right" scrollamount="15" loop="1" class="error-message text-green-500">
            {{ session('error') }}
            </marquee>
            @endif
            @include('layouts.navigation')
            @yield('content')
            <script src="{{asset('js/booking.js')}}"></script>
            <script src="{{asset('js/dashboard.js')}}"></script>
            <script src="{{asset('js/search.js')}}"></script>
    </body>
</html>