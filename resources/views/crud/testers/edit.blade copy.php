<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Tester') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-gray-700 uppercase font-bold">Edit Tester</h2>
                </div>
                <div class="flex flex-wrap items-center">
                    <a href="{{ route('testers.index') }}"
                        class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                        <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z">
                            </path>
                        </svg>
                        <span class="ml-2 text-xs font-semibold">Back</span>
                    </a>
                </div>
            </div>

            <div class="table w-full mt-8 bg-white rounded">
                <form action="{{ route('testers.update', $tester->id) }}" method="POST"
                    class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $tester->id }}">
                    <input type="hidden" name="person_id" value="{{ $tester->person->id }}">
                    <input type="hidden" name="user_id" value="{{ $tester->person->user->id }}">


                    <!-- Name -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="name"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" value="{{ old('name', $tester->person->name) }}">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- UserName -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Username
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="username"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" value="{{ old('username', $tester->person->username) }}">
                            @error('username')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Phone
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="phone"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" value="{{ old('phone', $tester->person->phone) }}">
                            @error('phone')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Gender
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div class="flex flex-row items-center">
                                <label class="block text-gray-500 font-bold">
                                    <input name="sex" class="mr-2 leading-tight" type="radio" value="male"
                                        {{ old('sex', $tester->person->sex) == 'male' ? 'checked' : '' }}>
                                    <span class="text-sm">Male</span>
                                </label>
                                <label class="ml-4 block text-gray-500 font-bold">
                                    <input name="sex" class="mr-2 leading-tight" type="radio" value="female"
                                        {{ old('sex', $tester->person->sex) == 'female' ? 'checked' : '' }}>
                                    <span class="text-sm">Female</span>
                                </label>
                            </div>
                            @error('sex')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Date of Birth -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Date of Birth
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="birth_day" id="datepicker-sc" autocomplete="off"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                type="date" value="{{ old('birth_day', $tester->person->birth_day) }}">
                            @error('birth_day')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Address
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="address"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" value="{{ old('address', $tester->person->address) }}">
                            @error('address')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Marital Status -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Marital Status
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="IsMarried"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                                <option value="0" {{ $tester->person->IsMarried ? '' : 'selected' }}>Single
                                </option>
                                <option value="1" {{ $tester->person->IsMarried ? 'selected' : '' }}>Married
                                </option>
                            </select>
                            @error('IsMarried')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Status
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="Status"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                                <option value="1"
                                    {{ old('Status', $tester->person->Status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0"
                                    {{ old('Status', $tester->person->Status) == 0 ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                            @error('Status')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Update Tester
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        @push('scripts')
            <script>
                $(function() {
                    $("#datepicker-sc").datepicker({
                        dateFormat: 'yy-mm-dd'
                    });
                })
            </script>
        @endpush
    </div>
</x-app-layout>
