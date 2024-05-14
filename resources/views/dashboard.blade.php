@extends('layouts.admin')
@section('content')
<div class="flex-1 p-4">
            <!-- Navbar -->
            <nav class="bg-pink-400 p-4 mb-4">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="text-white font-semibold text-lg">Dashboard</div>
                    <div>
                        <a href="{{route('create.classes')}}" class="text-white hover:text-gray-200 mr-4">Create Class</a>
                        <a href="{{route('create.trainers')}}" class="text-white hover:text-gray-200 mr-4">Create Trainer</a>
                        <a href="{{route('create.users')}}" class="text-white hover:text-gray-200 mr-4">Create User</a>
                        <a href="{{route('create.admin.booking')}}" class="text-white hover:text-gray-200">Create Booking</a>
                    </div>
                </div>
            </nav>

            <!-- Charts -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <!-- 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{asset('background/dashboard.jpg')}}" alt="" style="width:100%;max-width:700px">
                    
                </div>
                <!-- 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Users Growth Chart</h2>
                    <canvas id="myChart" style="width:100%;max-width:700px" class="text-black"></canvas>
                </div>
            </div>

            <!-- Detailed Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Total Users</h2>
                    <p class="text-3xl font-bold text-pink-600">{{count($users)}}</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Total Bookings</h2>
                    <p class="text-3xl font-bold text-green-600">{{count($bookings)}}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Total Classes</h2>
                    <p class="text-3xl font-bold text-green-600">{{count($classes)}}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Total Trainers</h2>
                    <p class="text-3xl font-bold text-green-600">{{count($trainers)}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection