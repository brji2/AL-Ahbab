<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">User Details</h1>
            <div class="bg-white p-4 shadow-md rounded-lg">
                <p><strong>Username:</strong> {{ $user->userName }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Birth Day:</strong> {{ $user->birth_day }}</p>
                <p><strong>Phone:</strong> {{ $user->phone ?? 'Not provided' }}</p>
            </div>

            <a href="{{ route('users.edit', $user->id) }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4"
                    onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
