<ul class="pb-2 space-y-2 text-white">

    <li>
        <button type="button"
            class="w-full flex items-center p-2 text-base text-gray-200 rounded-lg hover:bg-gray-800 group border"
            aria-controls="40038942" data-collapse-toggle="40038942">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                </path>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Posts</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
            </svg>
        </button>

        <ul id="" class=" py-2 space-y-2">
            <li>
                <a class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-800 border border-dashed"
                    href="{{ route('viewpost') }}">View all Posts</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-800 border border-dashed"
                    href="{{ route('addpost') }}">Add new Posts</a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-800 border border-dashed"
                    href="/admin/posts/categories/manage">Categories</a>
            </li>
        </ul>
    </li>


</ul>
