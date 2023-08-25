<x-app-layout>
    
    <section class="container mx-auto px-2 my-5">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="" aria-label="Breadcrumb">
            <ol role="list" class="bg-white dark:bg-gray-800 rounded-md shadow px-5 flex space-x-4">

                <li class="flex">
                    <div class="flex items-center">
                        <a href="https://itsourov.com" class="text-gray-400 hover:text-gray-500">
                            <!-- Heroicon name: solid/home -->
                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            <span class="sr-only">Home</span>
                        </a>
                    </div>
                </li>
                <li class="flex">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200 dark:text-gray-700" viewBox="0 0 24 44"
                            preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
                        </svg>
                        <a href="https://itsourov.com/blog"
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 transition-all">Blog</a>
                    </div>
                </li>
                <li class="flex">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200 dark:text-gray-700" viewBox="0 0 24 44"
                            preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
                        </svg>
                        <a href="#"
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 transition-all line-clamp-1">
                            How to Integrate Filepond in laravel livewire?</a>
                    </div>
                </li>

            </ol>
        </nav>

    </section>

    <div class="searchblog p-2 px-6">
        <form action="" method="get" class="flex justify-between">
            <input type="text" placeholder="Search blog" class="w-full">
            <input type="submit" value="Search" class="bg-gray-800 text-black dark:text-white p-2">
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-2 px-6 mx-auto">

        @foreach ($posts as $post)
            <div class="max-w-sm mb-5 bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg bg-gray-500" src="{{ $post->id }}" alt="Featured Image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->postTitle }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700" maxlength="30"> {{ Str::limit($post->postDes, 80) }}</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach


    </div>

</x-app-layout>
