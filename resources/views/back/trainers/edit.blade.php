@extends('layouts.admin')
@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-auto mt-8 mb-8 bg-gradient-to-r from-gray-200 to-purple-200">
        <div class="flex items-center">
            <img src="{{asset('icons/createTrainer.png')}}" alt="" class="mr-2 w-10">
            <h2 class="text-2xl font-semibold mb-6 mt-4 text-pink-600">Edit trainer</h2>
        </div>
        <form action="{{route('update.trainer', $trainer->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Trainer's name</label>
                <input type="text" id="name" name="name" value="{{$trainer->name}}" placeholder="Trainer's name" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Age -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Trainer's name</label>
                <input type="text" id="age" name="age" value="{{$trainer->age}}" placeholder="Trainer's age" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Speciality -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Speciality</label>
                <input type="text" id="speciality" name="speciality" value="{{$trainer->speciality}}" placeholder="Trainer's speciality" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="description" name="description" placeholder="Write a few words about this class" rows="5"
                    class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">{{$trainer->description}}</textarea>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <input type="file" name="image">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">
                Update Trainer
            </button>
        </form>
    </div>
</body>
@endsection
