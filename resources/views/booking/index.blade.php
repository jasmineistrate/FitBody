@extends('layouts.front')
@section('content')
<!-- Modal -->
<div id="confirmation-modal">
    <h2 class="font-bold">Are you sure you want to cancel this booking?</h2>
    <div class="flex items-center gap-5 mt-4"> 
        <button id="yesConfirm" onclick = "deleteBooking(this)" class="bg-green-400 px-4 py-2 rounded text-white">Yes</button>
        <button id="noConfirm"  onclick = "hideDeleteModal()" class="bg-red-400 px-4 py-2 rounded text-white">No</button>
    </div>
</div>

    <div class="max-w-4xl mx-auto mt-6">
        <h1 class="text-3xl font-semibold text-center mb-6 text-white">My bookings</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Class title
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Class start
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Class end
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($bookings as $booking)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{$booking->class}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ substr($booking->start, 0, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ substr($booking->start, 0, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-pink-600 text-white px-2 py-1 rounded" id="confirmButton" data-booking-id="{{$booking->id}}" onclick="confirmDeleteBooking(this)">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection