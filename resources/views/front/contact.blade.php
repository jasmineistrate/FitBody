@extends('layouts.front')
@section('content')
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Details -->
            <div class="max-w-md mx-auto bg-white shadow-md rounded-md p-8">
                <h1 class="text-2xl font-bold mb-4 flex justify-center mb-6">Contact Details</h1>
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <img src="{{asset('icons/address.png')}}" class="w-6 mr-2" alt="Location Icon">
                        <a href="https://www.google.com/maps/place/Strada+Mihai+Eminescu+5,+Cluj-Napoca" target="_blank" rel="noopener noreferrer"
                            class="inline-block hover:text-blue-500 transition duration-200">
                            Str. Mihai Eminescu, Cluj-Napoca, Romania
                        </a>
                    </div>
                    <div class="flex items-center mb-2">
                        <img src="{{asset('icons/phone.png')}}" class="w-6 mr-2" alt="Phone Icon">
                        <p class="text-gray-600">+40 734 626 573</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <img src="{{asset('icons/email.png')}}" class="w-6 mr-2" alt="Email Icon">
                        <p class="text-gray-600">fitbody@example.com</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <img src="{{asset('icons/website.png')}}" class="w-6 mr-2" alt="Website Icon">
                        <a href="https://www.edu.ro/" class="text-blue-500 hover:underline">https://www.edu.ro</a>
                    </div>
                </div>
                <p>Get in touch with FitBody today to start your journey towards a healthier lifestyle! At FitBody, we offer a wide range of exhilarating group fitness classes to help you achieve your fitness goals while having fun and staying motivated. Contact us now for more information on class schedules, membership options, and special promotions. Let's sweat, smile, and succeed together with FitBody!</p>
            </div>
            <div class="max-w-md">
            <iframe width="702" height="475" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=702&amp;height=475&amp;hl=en&amp;q=mihai%20eminescu%20cluj-napoca+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.betriebshaftpflicht.at/cyber-versicherung/'>Cyberattacke Versicherung</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=b3c50dfb71c9b7ba430fb79d34d3ff114fd35e41'></script>
            </div>
        </div>
    </div>
@endsection
