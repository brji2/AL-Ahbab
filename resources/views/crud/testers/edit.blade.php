<x-crud-layout title="تعديل بيانات المختبر" backUrl="testers.index">


    <form action="{{ route('testers.update', $tester->id) }}"
        method="POST"class="w-full grid grid-cols-4 gap-3  max-w-xl p-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class=" col-span-4 md:col-span-2">
            <x-input-label for="name" :value="__('الاسم الثلاثي')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- Name -->


        <!-- Username -->
        <div class=" col-span-4 md:col-span-2">
            <x-input-label for="username" :value="__('اسم المستخدم')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username')"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>
        <!--/ Username -->


        <!-- Phone -->
        <div class=" col-span-4 md:col-span-2">
            <x-input-label for="phone" :value="__('رقم الهاتف')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone')"
                required autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>
        <!--/ Phone -->

        <!-- Birth Date -->
        <div class=" col-span-4 md:col-span-2">
            <x-input-label for="datepicker-sc" :value="__('تاريخ الميلاد')" />
            <x-text-input id="datepicker-sc" name="birth_day" type="date" class="mt-1 block w-full"
                :value="old('birth_day')" required autocomplete="birth_day" />
            <x-input-error class="mt-2" :messages="$errors->get('birth_day')" />
        </div>
        <!--/ birth_day -->


        <!-- Address -->
        <div class=" col-span-4 md:col-span-2">
            <x-input-label for="address" :value="__('العنوان')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address')"
                required autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        <!--/ Address -->



        <div class=" col-span-4 md:col-span-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">اختر
                المعهد</label>
            <select id="countries" name="institute_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>اختر المعهد</option>
                @foreach ($institutes as $institute)
                    <option {{ $tester->institute_id == $institute->id ?? 'selected' }} value="{{ $institute->id }}">
                        {{ $institute->name }}</option>
                @endforeach
            </select>
            @error('institute_id')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>




        <!-- Gender -->
        <div class="md:flex md:items-center justify-center mb-6 col-span-2">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    الجنس
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="flex flex-row items-center">
                    <label class="block text-gray-500 font-bold">
                        <input name="sex" class="mr-2 leading-tight" type="radio" value="male">
                        <span class="text-sm">ذكر</span>
                    </label>
                    <label class="ml-4 block text-gray-500 font-bold">
                        <input name="sex" class="mr-2 leading-tight" type="radio" value="female">
                        <span class="text-sm">أنثى</span>
                    </label>
                </div>
                @error('sex')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>



        <!-- Is Married -->
        <div class="md:flex md:items-center col-span-2 mb-6">

            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                الوضع الاجتماعي
            </label>
            <div class="">
                <div class="  flex flex-row items-center">
                    <label class="block text-gray-500 font-bold">
                        <input name="IsMarried" class="mr-2 leading-tight" type="radio" value="1">
                        <span class="text-sm">متزوج</span>
                    </label>
                    <label class="ml-4 block text-gray-500 font-bold">
                        <input name="IsMarried" class="mr-2 leading-tight" type="radio" value="0">
                        <span class="text-sm">أعزب</span>
                    </label>
                </div>
                @error('IsMarried')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>

        </div>




        <x-primary-button class=" col-span-2 md:col-span-1">تعديل</x-primary-button>

    </form>
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
</x-crud-layout>
