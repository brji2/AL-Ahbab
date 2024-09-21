<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Edit Institute</h1>

            <form action="{{ route('institutes.update', $institute->id) }}" method="POST"
                class="bg-white p-6 rounded shadow-md">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $institute->name }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="location_id" class="block text-sm font-medium text-gray-700">Location</label>
                    <select name="location_id" id="location_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}" @if ($location->id == $institute->location_id) selected @endif>
                                {{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="manager_id" class="block text-sm font-medium text-gray-700">Manager</label>
                    <select name="manager_id" id="manager_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        @foreach ($managers as $manager)
                            <option value="{{ $manager->id }}" @if ($manager->id == $institute->manager_id) selected @endif>
                                {{ $manager->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="region_id" class="block text-sm font-medium text-gray-700">Region</label>
                    <select name="region_id" id="region_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" @if ($region->id == $institute->region_id) selected @endif>
                                {{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Institute</button>
            </form>
        </div>
    </div>
</x-app-layout>
