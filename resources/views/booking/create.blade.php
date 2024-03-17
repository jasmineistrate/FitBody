@extends('layouts.front')
@section('content')
<body x-data="app()" class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold text-center mb-8 text-white">Create Booking</h1>
        <form action="{{route('store.booking')}}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="user_name" class="block text-gray-700 text-sm font-bold mb-2">User Name</label>
                <input type="text" id="user_name" name="user_name" value="{{$user->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="user_email" class="block text-gray-700 text-sm font-bold mb-2">User Email</label>
                <input type="text" id="user_email" name="user_email" value="{{$user->email}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Class</label>
                <select x-on:change="selectOptionId($event.target.value)" name="class" id="class" class="border-2 rounded-md border-pink-200">
                    @foreach($classes as $class)
                        <option id="choosenClass" class="options-booking" value="{{$class->id}}">
                            {{$class->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div id="classSchedule" class="mb-4 bg-black p-4 rounded-md">
                <label class="block text-white text-sm font-bold mb-2">Class Schedule</label>
                <div x-html="bookingData" class="text-white"></div>
            </div>


            <div class="flex items-center justify-between">
                <button type="submit" class="bg-pink-600 mt-6 hover:bg-pink-200 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Create Booking</button>
            </div>
        </form>
    </div>
</body>
@endsection