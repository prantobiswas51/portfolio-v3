<x-app-layout>
<div class="ml-10 text-4xl py-12">
    <h2>My Working Area</h2>
</div>

<div class="grid justify-items-center pb-24 grid-cols-1 md:grid-cols-4 gap-6 px-6 mx-auto">

    @foreach ($categories as $category)
        
    <div class="max-w-[19rem] bg-gray-50 dark:bg-gray-700  mb-2 rounded-lg shadow">
        <a href="#" class="">
            <img class="rounded-t-lg" src="{{ asset('storage/admin/categories/' . $category->catImageUrl) }}" alt="Category Image" />
        </a>
        <div class="p-5">

            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight ">{{ $category->catName }}</h5>
            </a>

            <p class="date ">{{ Str::limit($category->created_at, 10) }}</p>
            <p class="mb-3 font-normal">{{ Str::limit($category->catMessage, 100) }}</p>
            
            <a href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                See Projects
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