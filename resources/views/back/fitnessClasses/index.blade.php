@extends('layouts.admin')
@section('content')
<div class="mt-6 w-full flex justify-center">
    <!-- Table -->
    <div class="bg-slate-800 w-4/5">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gradient-to-r from-gray-300 to-purple-200">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Start</th>
                    <th class="py-2 px-4 border-b">End</th>
                    <th class="py-2 px-4 border-b">Duration</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Trainer</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Image</th>
                    <th class="py-2 px-4 border-b">Created_at</th>
                    <th class="py-2 px-4 border-b">Updated_at</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($classes as $class)
                <tr>
                    <td class="py-2 px-4 border-b">{{$class->id}}</td>
                    <td class="py-2 px-4 border-b">{{$class->title}}</td>
                    <td class="py-2 px-4 border-b">{{ substr($class->start, 0, 5) }}</td>
                    <td class="py-2 px-4 border-b">{{ substr($class->end, 0, 5) }}</td>
                    <td class="py-2 px-4 border-b">{{$class->duration}}</td>
                    <td class="py-2 px-4 border-b">{{$class->date}}</td>
                    <td class="py-2 px-4 border-b">{{$class->trainer}}</td>
                    <td class="py-2 px-4 border-b">
                    {{ (strlen($class->description) > 50) ? substr($class->description, 0, 50) . '...' : $class->description }}
                    </td>
                    <td class="py-2 px-4 border-b">{{$class->image}}</td>
                    <td class="py-2 px-4 border-b">{{$class->created_at}}</td>
                    <td class="py-2 px-4 border-b">{{$class->updated_at}}</td>
                    <td class="py-2 px-4 border-b">
                        <!--Action buttons-->
                        <form action="{{route('delete.class', $class->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="px-2 py-1 rounded"><img src="{{asset('icons/delete.png')}}" alt="" class="w-8"></button>
                        </form>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('edit.class', $class->id)}}"><img src="{{asset('icons/edit.png')}}" alt="" class="w-8"></a>
                        </button>
                        <button class="px-2 py-1 rounded">
                            <a href="{{route('show.class', $class->id)}}"><img src="{{asset('icons/show.png')}}" alt="" class="w-8"></a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
