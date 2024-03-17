@extends('layouts.admin')
@section('content')
<body x-data="searchUserApp()" class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-auto mt-8 mb-8 bg-gradient-to-r from-gray-200 to-purple-200">
        <div class="flex items-center">
            <img src="{{asset('icons/createTrainer.png')}}" alt="" class="mr-2 w-10">
            <h2 class="text-2xl font-semibold mb-6 mt-4 text-pink-600">Create booking</h2>
        </div>
        <form action="{{route('store.admin.booking')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Search -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Search User</label>
                <input type="text" x-model="userQuery" class="border-2 rounded-md border-pink-200 mt-1 p-2 w-full border-2 rounded-md border-pink-200" @input.debounce.500ms="searchUser()">
            </div>
            <div class="mb-4">
                <select name="userSearchRez" id="" x-show="userRez.length" class="w-full">
                    <template x-for="(user, index) in userRez" :key="index">
                        <option x-text="user.email" :value="user.id"></option>
                    </template>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Class title</label>
                <select name="class" id="class" class="border-2 rounded-md border-pink-200 mt-1 p-2 w-full border-2 rounded-md border-pink-200">
                    @foreach($classes as $class)
                        <option class="options-booking" value="{{$class->id}}">
                            {{$class->title}}
                        </option>
                    @endforeach
                </select>
            </div>
                 
            <!-- Submit -->
            <button type="submit"
                class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">
                Create Booking
            </button>
        </form>
    </div>
</body>
@endsection
