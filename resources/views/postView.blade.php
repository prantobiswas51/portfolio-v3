<x-app-layout>
    <main class="mt-10 dark:text-gray-50">

        <div class="mb-4 md:mb-0 w-full mx-auto relative ">
            <div class="px-4 pt-10 lg:px-0">
                <h2 class="text-4xl font-semibold  leading-tight">
                    Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.
                </h2>
                <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2">
                    Cryptocurrency
                </a>
            </div>

        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">

            <div class="px-4 lg:px-0 mt-12  text-lg leading-relaxed w-full lg:w-3/4">

                <img class="w-full mb-4 object-cover lg:rounded"
                    src="https://images.unsplash.com/photo-1587614387466-0a72ca909e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                    style="height: 28em;" />

                <div class="py-4" id="desBox">
                  {!! $posts->postDes !!}
                </div>

            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold  text-sm"> Mike Sullivan </p>
                            <p class="font-semibold  text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class=" py-3">
                        Mike writes about technology
                        Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it.
                    </p>
                    <button
                        class="px-2 py-1 dark:text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                        Follow
                        <i class='bx bx-user-plus ml-2'></i>
                    </button>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
