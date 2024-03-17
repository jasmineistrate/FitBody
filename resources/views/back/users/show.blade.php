@extends('layouts.admin')
@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto px-8 py-10">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-8 py-10 bg-gradient-to-r from-gray-300 to-purple-100">
                <!-- Image -->
                <div class="flex justify-center mb-4">
                    <img class="w-24 h-24 rounded-full" src="{{asset('userImages/'.$user->image)}}" alt="User Image">
                </div>
                <!-- Details -->
                <div class="text-center mb-4">
                    <h2 class="text-xl font-semibold">{{$user->name}}</h2>
                    <p class="text-gray-600">{{$user->email}}</p>
                </div>
                <!-- Role -->
                <div class="flex items-center justify-center mb-4">
                    @if($user->isAdmin)
                    <span class="px-2 py-1 bg-pink-300 text-white text-xs font-semibold rounded-full">Admin</span>
                    @else
                    <span class="px-2 py-1 bg-pink-300 text-white text-xs font-semibold rounded-full">User</span>
                    @endif
                </div>
                <!-- Edit Profile Button -->
                <div class="flex justify-center">
                    <a href="{{route('edit.user', $user->id)}}" class="px-4 py-2 text-white text-sm font-semibold rounded-full bg-pink-600 text-white hover:bg-pink-200">Edit User</a>
                    <a href="{{route('edit.user', $user->id)}}" class="px-4 py-2 ml-5 text-white text-sm font-semibold rounded-full bg-pink-600 text-white hover:bg-pink-300">Delete User</a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection