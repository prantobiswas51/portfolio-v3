<ul class="pb-2 space-y-2">

    <li>
        <a class="w-full flex items-center p-2 text-base text-gray-600 rounded-lg hover:bg-gray-100 group dark:text-gray-300 dark:hover:bg-gray-700 border dark:border-gray-700"
            href="/admin">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                </path>
            </svg>
            <span class="ml-3" sidebar-toggle-item="">Dashboard</span>
        </a>
    </li>

    {{-- Posts  --}}
    <li>
        
        <button type="button" class="w-full flex items-center p-2 text-base text-gray-600 rounded-lg hover:bg-gray-100 group dark:text-gray-300 dark:hover:bg-gray-700 border dark:border-gray-700"
            aria-controls="612040022" data-collapse-toggle="612040022" >

            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                </path>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Posts</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
            </svg>
        </button>
        <ul id="612040022" class="block py-2 space-y-2 hidden">
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('viewpost') }}">View all Posts</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('addpost') }}">Add new Posts</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('category') }}">Categories</a>
            </li>
        </ul>
    </li>

    {{-- Products --}}
    <li>

        <button type="button" class="w-full flex items-center p-2 text-base text-gray-600 rounded-lg hover:bg-gray-100 group dark:text-gray-300 dark:hover:bg-gray-700 border dark:border-gray-700"
            aria-controls="1656928922" data-collapse-toggle="1656928922">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                </path>
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Products</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
            </svg>
        </button>

        <ul id="1656928922" class="hidden py-2 space-y-2">
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('viewProduct') }}">View all Products</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('addProduct') }}">Add new Product</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 border border-dashed dark:border-gray-700"
                    href="{{ route('category') }}">Categories</a>
            </li>
        </ul>
    </li>

    {{-- User --}}
    <li>
        <a class="w-full flex items-center p-2 text-base text-gray-600 rounded-lg hover:bg-gray-100 group dark:text-gray-300 dark:hover:bg-gray-700 border dark:border-gray-700" href="{{route('adminSeeUser')}}">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                </path>
            </svg>

            <span class="ml-3" sidebar-toggle-item="">Users</span>
        </a>
    </li>

</ul>
