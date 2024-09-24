<header class="flex px-4 items-center justify-between mb-4 rounded bg-gray-50 dark:bg-gray-800 shadow">
    <h2 class="font-semibold py-6 px-4 sm:px-6  text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ $title ?? null }}
    </h2>
    @isset($backUrl)
        <a href="{{ route($backUrl) ?? '#' }}"
            class="bg-blue-500 hover:bg-blue-600 text-white text-sm uppercase py-2 px-4 flex items-center rounded shadow transition duration-200 ease-in-out">
            <span class="ml-2 text-xs font-semibold">رجوع</span>
            <svg class="w-4 h-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z">
                </path>
            </svg>

        </a>
    @endisset
</header>
