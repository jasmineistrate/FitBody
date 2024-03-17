@extends('layouts.admin')
@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-auto mt-8 mb-8 bg-gradient-to-r from-gray-200 to-purple-200">
        <div class="flex items-center">
            <img src="{{asset('icons/createClass.png')}}" alt="" class="mr-2 w-10">
            <h2 class="text-2xl font-semibold mb-6 mt-4 text-pink-600">Create fitness class</h2>
        </div>
        <form action="{{route('store.classes')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Title</label>
                <input type="title" id="title" name="title" placeholder="Class title" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Start End Duration -->
            <div class="mb-4 flex items-center">
            <div class="mr-4">
                <label class="block text-sm font-medium text-gray-600">Start</label>
                <input type="time" id="start" name="start" class="mt-1 p-2 w-31 border-2 rounded-md border-pink-200">
            </div>
            <div class="mr-4">
                <label class="block text-sm font-medium text-gray-600">End</label>
                <input type="time" id="end" name="end" class="mt-1 p-2 w-31 border-2 rounded-md border-pink-200">
            </div>
            <div class="mr-4">
                <label class="ml-3 block text-sm font-medium text-gray-600">Duration (hours)</label>
                <input type="text" id="duration" name="duration" class="ml-3 mt-1 p-2 w-40 border-2 rounded-md border-pink-200">
            </div>
            </div>

            <!-- Date-->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Date</label>
                <input type="date" id="date" name="date" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Trainer-->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Trainer</label>
                <select name="trainer" id="trainer" class="border-2 rounded-md border-pink-200">
                    @foreach($trainers as $trainer)
                        <option value="{{$trainer->name}}">{{$trainer->name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="description" name="description" placeholder="Write a few words about this class" rows="5"
                    class="mt-1 p-2 w-full border-2 rounded-md border-pink-200"></textarea>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <input type="file" name="image">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">
                Create Class
            </button>
        </form>
    </div>
</body>
@endsection
