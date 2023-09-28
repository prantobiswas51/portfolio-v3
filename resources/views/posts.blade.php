<x-app-layout>
    
  

    <div class="searchblog p-2 px-6">
        <form action="" method="get" class="flex justify-between">
            <input type="text" placeholder="Search blog" class="w-full">
            <input type="submit" value="Search" class="bg-gray-800 text-black dark:text-white p-2">
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-2 px-6 mx-auto">

        @foreach ($posts as $post)
            <div class="max-w-sm mb-5 bg-gray-800 text-white border-gray-800 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg bg-gray-500" src="/storage/admin/posts/{{ $post->postImg }}" alt="Featured Image" />
                </a>
                <div class="p-5">
                    <a href="/post/{{ $post->id }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight ">{{ $post->postTitle }}</h5>
                    </a>
                    <p class="mb-3 font-normal " maxlength="30"> {{ Str::limit(strip_tags($post->postDes), 80) }}</p>
                    
                    <a href="/viewpost/{{ $post->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
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
