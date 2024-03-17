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
                    <th class="py-2 px-4 border-b">IsAdmin</th>
                    <th class="py-2 px-4 border-b">Created_at</th>
                    <th class="py-2 px-4 border-b">Updated_at</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{$user->id}}</td>
                    <td class="py-2 px-4 border-b">{{$user->name}}</td>
                    <td class="py-2 px-4 border-b">{{$user->email}}</td>
                    @if($user->isAdmin)
                        <td class="py-2 px-4 border-b">Admin</td>
                    @else
                        <td class="py-2 px-4 border-b">User</td>
                    @endif
                    <td class="py-2 px-4 border-b">{{$user->created_at}}</td>
                    <td class="py-2 px-4 border-b">{{$user->updated_at}}</td>
                    <td class="py-2 px-4 border-b">
                        <!--Action buttons-->
                        <form action="{{route('delete.user', $user->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="px-2 py-1 rounded"><img src="{{asset('icons/delete.png')}}" alt="" class="w-8"></button>
                        </form>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('edit.user', $user->id)}}"><img src="{{asset('icons/edit.png')}}" alt="" class="w-8"></a>
                        </button>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('show.user', $user->id)}}"><img src="{{asset('icons/show.png')}}" alt="" class="w-8"></a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
