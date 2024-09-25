<footer
    class="w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">

    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/"
            class="hover:underline">Pranto Biswas</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <x-nav-link :href="route('dev')">
            {{ __('About') }}
        </x-nav-link>

        <x-nav-link :href="route('contact')">
            {{ __('Contact') }}
        </x-nav-link>
    </ul>


</footer>
