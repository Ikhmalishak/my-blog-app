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
                <form action="{{route('blogs.store')}}" method="POST">
                    @csrf
                    <label>Title:</label>
                <input type="text" name="title">
                <br><br>
                <label>Description:</label>
                <input type="text" name="description">
                <br><br>
                <button type="submit" >Create new blog</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
