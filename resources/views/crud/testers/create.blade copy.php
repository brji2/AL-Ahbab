<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Create New tester</h1>
            <form action="{{ route('testers.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">name:</label>
                    <input type="text" name="nmae" id="name"
                        class="w-full p-2 border border-gray-300 rounded-lg" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" name="email" id="email"
                        class="w-full p-2 border border-gray-300 rounded-lg" value="{{ old('email') }}" required>
                </div>

                <div class="mb-4">
                    <label for="birth_day" class="block text-gray-700">Birth Day:</label>
                    <input type="date" name="birth_day" id="birth_day"
                        class="w-full p-2 border border-gray-300 rounded-lg" value="{{ old('birth_day') }}" required>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone (optional):</label>
                    <input type="text" name="phone" id="phone"
                        class="w-full p-2 border border-gray-300 rounded-lg" value="{{ old('phone') }}">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" name="password" id="password"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </form>
        </div>
    </div>
</x-app-layout>
