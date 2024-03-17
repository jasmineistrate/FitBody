@extends('layouts.admin')
@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-auto mt-8 mb-8 bg-gradient-to-r from-gray-200 to-purple-200">
        <div class="flex items-center">
            <img src="{{asset('icons/createClass.png')}}" alt="" class="mr-2 w-10">
            <h2 class="text-2xl font-semibold mb-6 mt-4 text-pink-600">Edit fitness class</h2>
        </div>
        <form action="{{route('update.class', $class->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Title -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Title</label>
                <input type="title" id="title" name="title" value="{{$class->title}}" placeholder="Class title" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Start End Duration -->
            <div class="mb-4 flex items-center">
            <div class="mr-4">
                <label class="block text-sm font-medium text-gray-600">End</label>
                <input type="time" id="end" name="end" value="{{$class->end}}" class="mt-1 p-2 w-31 border-2 rounded-md border-pink-200">
            </div>
            <div class="mr-4">
                <label class="block text-sm font-medium text-gray-600">Start</label>
                <input type="time" id="start" name="start" value="{{$class->start}}" class="mt-1 p-2 w-31 border-2 rounded-md border-pink-200">
            </div>
            <div class="mr-4">
                <label class="ml-3 block text-sm font-medium text-gray-600">Duration</label>
                <input type="text" id="duration" name="duration" value="{{$class->duration}} h" class="ml-3 mt-1 p-2 w-40 border-2 rounded-md border-pink-200">
            </div>
            </div>

            <!-- Date-->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Date</label>
                <input type="date" id="date" name="date" value="{{$class->date}}" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Trainer-->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Trainer</label>
                <select name="trainer" value="{{$class->trainer}}" id="trainer" class="border-2 rounded-md border-pink-200">
                    @foreach($trainers as $trainer)
                        <option value="{{$trainer->name}}">{{$class->trainer}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="description" name="description" rows="5"
                    class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">{{$class->description}}</textarea>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <input type="file" name="image">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">
                Update Class
            </button>
        </form>
    </div>
</body>
@endsection
