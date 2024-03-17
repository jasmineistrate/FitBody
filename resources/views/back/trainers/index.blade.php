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
                    <th class="py-2 px-4 border-b">Speciality</th>
                    <th class="py-2 px-4 border-b">Age</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Created_at</th>
                    <th class="py-2 px-4 border-b">Updated_at</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($trainers as $trainer)
                <tr>
                    <td class="py-2 px-4 border-b">{{$trainer->id}}</td>
                    <td class="py-2 px-4 border-b">{{$trainer->name}}</td>
                    <td class="py-2 px-4 border-b">{{$trainer->speciality}}</td>
                    <td class="py-2 px-4 border-b">{{$trainer->age}}</td>
                    <td class="py-2 px-4 border-b">
                    {{ (strlen($trainer->description) > 50) ? substr($trainer->description, 0, 50) . '...' : $trainer->description }}
                        </td>
                    <td class="py-2 px-4 border-b">{{$trainer->created_at}}</td>
                    <td class="py-2 px-4 border-b">{{$trainer->updated_at}}</td>
                    <td class="py-2 px-4 border-b">
                        <!--Action buttons-->
                        <form action="{{route('delete.trainer', $trainer->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="px-2 py-1 rounded"><img src="{{asset('icons/delete.png')}}" alt="" class="w-8"></button>
                        </form>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('edit.trainer', $trainer->id)}}"><img src="{{asset('icons/edit.png')}}" alt="" class="w-8"></a>
                        </button>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('show.trainer', $trainer->id)}}"><img src="{{asset('icons/show.png')}}" alt="" class="w-8"></a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection