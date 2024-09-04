<x-app-layout>
<div class="ml-10 text-4xl py-12">
    <h2>My Working Area</h2>
</div>

{{-- <div class="grid justify-items-center pb-24 grid-cols-1 md:grid-cols-4 gap-6 px-6 mx-auto">

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

</div> --}}

<div class="sm:flex sm:justify-center flex-wrap">
    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/Web-design.jpg" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">Web Design</h5>
            <p class="mb-4 text-base">
                Get a design for your website or design your website with our help. This category includes WordPress design like Elementor, Newpaper (TagDiv Composer) etc designs too. Hire us for any
                website design jobs.
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>

    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/Web_development.png" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">Web Development</h5>
            <p class="mb-4 text-base">
            Develop your website's funtionality through us. It could be custom coding or funtionalities that could be gained through plugins or themes.
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>

    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/Debugging-wp.png" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">WordPress Debugging</h5>
            <p class="mb-4 text-base">
            Debug or remove virus from your website with our help. We fix any design or funtionality related issues. Removing malware from website also includes in this category.
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>

    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/wp-plugin-dev.png" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">WordPress Plugin Development</h5>
            <p class="mb-4 text-base">
                We Develop custom plugin to enchance your website's funtionality. Have a chat with us to understand if you need it or not!
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>

    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/Laravel_Developer.png" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">Laravel Developer</h5>
            <p class="mb-4 text-base">
                Develop your website with Laravel Framework and enjoy it awesome services. If you want fully custom website then you can choose laravel framework to build one.
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>


    <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
        <img class="rounded-t-lg" src="./images/graphics-design.jpg" alt="" />
        <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">Graphic Design</h5>
            <p class="mb-4 text-base">
            Design graphical content, photo edit, website images, banners, icons and so on. We use Photpshop, Illustrator, Xd and Figma as required. 
            </p>
      </div>
      <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
      </div>
    </div>


    
  
</div>


</x-app-layout>