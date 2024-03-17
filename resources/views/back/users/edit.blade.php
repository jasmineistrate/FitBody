@extends('layouts.admin')
@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-auto mt-8 mb-8 bg-gradient-to-r from-gray-200 to-purple-200">
        <div class="flex items-center">
            <img src="{{asset('icons/createClass.png')}}" alt="" class="mr-2 w-10">
            <h2 class="text-2xl font-semibold mb-6 mt-4 text-pink-600">Edit user</h2>
        </div>
        <form action="{{route('update.user', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" name="name" value="{{$user->name}}" placeholder="User`s name" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" value="{{$user->email}}" placeholder="maria@gmail.com" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- Confirm password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Confrim Password</label>
                <input type="password" id="confirm password" name="confirmPassword" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
            </div>

            <!-- IsAdmin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Choose role</label>
                <select name="isAdmin" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <input type="file" name="image">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">
                Update User
            </button>
        </form>
    </div>
</body>
@endsection
