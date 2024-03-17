@extends('layouts.admin')
@section('content')
<div class="max-w-screen-md mx-auto mt-6">
    <!-- Table -->
    <div class="bg-slate-800">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gradient-to-r from-gray-300 to-purple-200">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Class</th>
                    <th class="py-2 px-4 border-b">Start</th>
                    <th class="py-2 px-4 border-b">End</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Created_at</th>
                    <th class="py-2 px-4 border-b">Updated_at</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($bookings as $booking)
                <tr>
                    <td class="py-2 px-4 border-b">{{$booking->id}}</td>
                    <td class="py-2 px-4 border-b">{{$booking->name}}</td>
                    <td class="py-2 px-4 border-b">{{$booking->email}}</td>
                    <td class="py-2 px-4 border-b">{{$booking->class}}</td>
                    <td class="py-2 px-4 border-b">{{ substr($booking->start, 0, 5) }}</td>
                    <td class="py-2 px-4 border-b">{{ substr($booking->end, 0, 5) }}</td>
                    <td class="py-2 px-4 border-b">{{$booking->date}}</td>
                    <td class="py-2 px-4 border-b">{{$booking->created_at}}</td>
                    <td class="py-2 px-4 border-b">{{$booking->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection