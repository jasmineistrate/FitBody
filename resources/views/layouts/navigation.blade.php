@if(auth()->user()->isAdmin)
<nav class="bg-black text-white p-3">
        <div class="container mx-auto flex justify-between items-center">
            <!--Logo-->
                <a href="{{route('dashboard')}}" class="text-lg font-semibold w-12"><img src="{{asset('icons/dashboard.png')}}" alt=""></a>

            <!-- Navigation-->
            <div class="space-x-4">
                <a href="{{route('index.classes')}}" class="text-white hover:text-pink-300">Classes</a>
                <a href="{{route('index.users')}}" class="text-white hover:text-pink-300">Users</a>
                <a href="{{route('index.trainers')}}" class="text-white hover:text-pink-300">Trainers</a>
                <a href="{{route('index.admin.booking')}}" class="text-white hover:text-pink-300">Bookings</a>
            </div>
        </div>
</nav>
@endif