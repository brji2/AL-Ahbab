<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tester Details') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $tester->name }}</h1>

            <div class="mb-4">
                <strong>Email:</strong> {{ $tester->person->user->email }}
            </div>
            <div class="mb-4">
                <strong>Name:</strong> {{ $tester->person->name }}
            </div>
            <div class="mb-4">
                <strong>Username:</strong> {{ $tester->person->username }}
            </div>

            <div class="mb-4">
                <strong>Birth Day:</strong> {{ $tester->person->birth_day }}
            </div>
            <div class="mb-4">
                <strong>Phone:</strong> {{ $tester->person->phone }}
            </div>
            <div class="mb-4">
                <strong>Address:</strong> {{ $tester->person->address }}
            </div>
            <div class="mb-4">
                <strong>Gender:</strong> {{ $tester->person->sex }}
            </div>
            <div class="mb-4">
                <strong>Status:</strong> {{ $tester->person->Status ? 'Active' : 'Inactive' }}
            </div>
            <div class="mb-4">
                <strong>Married:</strong> {{ $tester->person->IsMarried ? 'Yes' : 'No' }}
            </div>

            <a href="{{ route('testers.index') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>


            <a href="{{ route('testers.edit', $tester->id) }}"
                class="bg-yellow-500 hover:bg-yellow-700 mx-2 text-white font-bold py-2 px-4 rounded">Edit</a>
        </div>
    </div>
</x-app-layout>
