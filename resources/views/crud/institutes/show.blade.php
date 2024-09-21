<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Institute Details</h1>

            <div class="bg-white p-6 rounded shadow-md">
                <p><strong>Name:</strong> {{ $institute->name }}</p>
                <p><strong>Location:</strong> {{ $institute->location->name }}</p>
                <p><strong>Manager:</strong> {{ $institute->manager->name }}</p>
                <p><strong>Region:</strong> {{ $institute->region->name }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('institutes.edit', $institute->id) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                <form action="{{ route('institutes.destroy', $institute->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                </form>
            </div>
        </div>
</x-app-layout>
