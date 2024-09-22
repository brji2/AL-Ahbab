<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <h1 class="text-2xl font-bold mb-4">قائمة المختبرين</h1>
        <a href="{{ route('testers.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">إضافة مختبر
            جديد</a>

        <table class="min-w-full text-left bg-white shadow-md rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b">#</th>
                    <th class="py-2 px-4 border-b">الاسم</th>
                    <th class="py-2 px-4 border-b">اسم المستخدم</th>
                    <th class="py-2 px-4 border-b">رقم الهاتف</th>
                    <th class="py-2 px-4 border-b">تاريخ الميلاد</th>
                    <th class="py-2 px-4 border-b">الإجراءات</th>
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
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">عرض</a>
                            <a href="{{ route('testers.edit', $tester->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">تعديل</a>
                            <form action="{{ route('testers.destroy', $tester->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                                    onclick="return confirm('Are You Sure')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
