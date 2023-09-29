<x-admin-layout>

    <div class="searchblog my-2">
        <form action="" method="get" class="flex justify-between">
            <input type="text" placeholder="Search Products" class="rounded-s-[50px] w-full">
            <input type="submit" value="Search" class="bg-gray-800 hover:cursor-pointer rounded-r-[50px] text-black dark:text-white p-2">
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-5">
        @foreach ($products as $product)
            <div class="border p-2 rounded bg-white dark:bg-gray-800 dark:border-none shadow-sm  px-0 py-0 overflow-hidden">
                
                <a href="">
                    <div class=" aspect-w-16 aspect-h-9 ">
                        <img src="https://itsourov.com/images/fallback.png" alt="" class="w-full h-full object-cover">
                    </div>
                </a>

                <div class="p-3 grid gap-3">
                    <a href="">
                        <h2 class="text-lg font-medium line-clamp-2">{{ $product->productTitle }}</h2>
                    </a>
                    <div class="ml-auto">
                        <a href="/blog">
                            <button
                                class="border border-primary-600 rounded py-1.5 px-3 hover:bg-primary-600 hover:text-gray-100 transition-all">
                                <svg class="inline w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </button>
                        </a>

                        <a href="">
                            <button
                                class="border border-primary-600 rounded py-1.5 px-3 hover:bg-primary-600 hover:text-gray-100 transition-all">
                                <svg class="inline w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                    </path>
                                </svg>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-layout>
