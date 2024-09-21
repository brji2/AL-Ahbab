<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class=" ">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Testers List</h1>
            <a href="{{ route('testers.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create
                New
                Tester </a>

            <table class="min-w-full text-left bg-white shadow-md rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b">#</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Username</th>
                        <th class="py-2 px-4 border-b">Phone</th>
                        <th class="py-2 px-4 border-b">Birth Date</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testers as $tester)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $tester->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $tester->person->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $tester->person->username }}</td>
                            <td class="py-2 px-4 border-b">{{ $tester->person->phone }}</td>
                            <td class="py-2 px-4 border-b">{{ $tester->person->birth_day }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('testers.show', $tester->id) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Show</a>
                                <a href="{{ route('testers.edit', $tester->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('testers.destroy', $tester->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                                        onclick="return confirm('Are You Sure')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
