@extends('layouts.admin')
@section('content')
<body class="bg-gray-100">
    <div class="flex justify-center px-4 py-8 gap-x-8">
        <div class="w-1/2 bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Image -->
            <div class="relative">
                <img class="w-full h-64 object-cover" src="{{asset('classesImages/'.$class->image)}}" alt="Class Image">
                <!-- Details -->
                <div class="absolute top-0 left-0 right-0 p-4 text-white">
                    <p class="text-sm">Start Time: {{$class->start}}</p>
                    <p class="text-sm">End Time:{{$class->end}}</p>
                    <p class="text-sm">Duration: {{$class->duration}}  hours</p>
                    <p class="text-sm">Trainer: {{$class->trainer}}</p>
                </div>
            </div>
            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold mb-2">{{$class->title}}</h2>
                <p class="text-gray-600">{{$class->description}}</p>
            </div>
            <!-- Buttons -->
            <div class="px-6 py-4 flex justify-center space-x-4">
                <button class="px-4 py-2 text-white text-sm font-semibold rounded-full bg-pink-600 text-white hover:bg-pink-200">Edit Class</button>
                <button class="px-4 py-2 text-white text-sm font-semibold rounded-full bg-pink-600 text-white hover:bg-pink-200">Delete Class</button>
            </div>
        </div>
        <div>

        <div class="max-w-4xl mx-auto mt-6">
        <h1 class="text-3xl font-semibold text-center mb-6">User Booking Data</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User's name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User's email
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-red">{{$user -> name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user -> email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </div>
    </div>
</body>
@endsection