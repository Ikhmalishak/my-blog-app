<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Form
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--Form -->
                <form action="{{route('blogs.update', $blog->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>Title:</label>
                <input type="text" name="title" value="{{$blog->title}}">
                <br><br>
                <label>Description:</label>
                <input type="text" name="description" value="{{$blog->description}}">
                <br><br>
                <button type="submit" >Update</button>
                
               
            </form>
            <form action="{{route('blogs.delete', $blog->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                     <button type="submit">Delete blog</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
