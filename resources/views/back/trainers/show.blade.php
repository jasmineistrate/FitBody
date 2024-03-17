@extends('layouts.admin')
@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto px-10 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-8 py-10 bg-gradient-to-r from-gray-300 to-purple-100">
            <h2 class="text-2xl font-semibold">{{$trainer->name}}</h2>
            <div class="text-gray-600">Age: {{$trainer->age}}</div>
            <div class="text-gray-600">Speciality: {{$trainer->speciality}}</div>
            <div class="mt-4">
            <img src="{{asset('trainersImages/'.$trainer->image)}}" alt="Trainer Image" class="w-full h-auto rounded-lg">
            </div>
            <div class="mt-4">
                <p class="mt-2">{{$trainer->description}}</p>
            </div>
        </div>
    </div>
</body>
@endsection