<nav class="bg-black text-white p-3">
        <div class="container mx-auto flex justify-between items-center">
            <!--Logo-->
            <a href="{{route('landing')}}" class="text-lg font-semibold w-12"><img src="{{asset('icons/logo.png')}}" alt=""></a>

            <!-- Navigation-->
            <ul class="flex space-x-4 w-full justify-center">
                <li><a href="{{route('landing')}}" class="hover:text-pink-300 font-bold text-lg">Home</a></li>
                <li><a href="{{route('showtrainers')}}" class="hover:text-pink-300 font-bold text-lg">Meet our team</a></li>
                <li><a href="{{route('contact')}}" class="hover:text-pink-300 font-bold text-lg">Contact us</a></li>
            </ul>

            @if(Auth::check())
                <ul class="flex space-x-2 items-center">
                <li class="bg-red-300 p-1 rounded w-32 text-center"><a href="{{route('create.booking')}}" class="hover:text-gray-200">BOOK NOW</a></li>
                <div id="parent-dropdown">
                    @if(auth()->user()->image)
                        <img src="{{asset('userImages/'. auth()->user()->image)}}" class="w-8 h-8 rounded-full cursor-pointer" alt="">
                    @else
                        <img src="{{asset('icons/user.png')}}" class="w-10 h-8 rounded-full cursor-pointer" alt="">
                    @endif
                    @if(auth()->user()->isAdmin)
                        <div id="dropdown-dashboard" class="bg-gray-800 py-2">
                            <a class="hover:text-pink-300 font-bold text-lg px-2" href="{{route('dashboard')}}">Dashboard</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="hover:text-pink-300 font-bold text-lg px-2" type="submit">Log Out</button>
                            </form>
                        </div>
                    @else
                    <div id="dropdown-dashboard-user" class="bg-gray-800 py-2">
                            <a class="hover:text-pink-300 font-bold text-lg px-2" href="{{route('index.booking')}}">My bookings</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="hover:text-pink-300 font-bold text-lg px-2" type="submit">Log Out</button>
                            </form>
                        </div>
                    @endif
                </div>
            </ul>
            @else
            <ul class="flex space-x-2 items-center">
                <div id="parent-dropdown" class="flex gap-x-5">
                    <li><a href="/login" class="hover:text-pink-300 font-bold text-lg">Login</a></li>
                    <li><a href="/register" class="hover:text-pink-300 font-bold text-lg">Register</a></li>
                </div>
            </ul>
            @endif

        </div>
    </nav>