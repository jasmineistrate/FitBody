@extends('layouts.front')
@section('content')
<body class="bg-gray-100 p-8">
    <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        @foreach($classes as $class)
        <div class="bg-white rounded-lg overflow-hidden shadow-md mb-2">
            <img src="{{asset('classesImages/'.$class->image)}}" alt="Card Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">{{$class->title}}</h3>
                <p class="text-gray-600">Duration: {{$class->duration}} h</p>
                <p class="text-gray-600">Date: {{$class->date}}</p>
                <p class="text-gray-600">Start: {{ substr($class->start, 0, 5) }}</p>
                <p class="text-gray-600">End: {{ substr($class->start, 0, 5) }}</p>
                <p class="text-sm text-gray-500 mt-2">Trainer: {{$class->trainer}}</p>
            </div>
            <button class="w-full bg-pink-400 text-white p-4 rounded-lg hover:bg-pink-200">
                <a href="{{route('create.booking')}}">BOOK NOW</a>
            </button>
        </div>   
        @endforeach
    </div>
</body>
@endsection