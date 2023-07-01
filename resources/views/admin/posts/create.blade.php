<x-admin-layout>

    <form class=" py-10 px-10 rounded-lg bg-gray-200 dark:bg-gray-800">
        <h2 class="p-2 text-4xl text-center">Create New Post</h2>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium">Post Title</label>
            <input type="email" id="email"
                class="shadow-sm  border text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                placeholder="How to get a car loan?" required>
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium ">Description</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="To get your car loan you need to feel this ....."></textarea>
        </div>

        <div class="mb-6 flex ">
            <div class="pr-2 w-full">



                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a category</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>

            </div>

            <div class="pr-2 w-full">
                <label for="email" class="block mb-2 text-sm font-medium">Tags</label>
                <input type="email" id="email"
                    class="shadow-sm  border  text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                    placeholder="Ex - Best cooking, Desi cooking" required>
            </div>

            <div class="pr-2 w-full">

                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post status</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a status</option>
                    <option value="US">Public</option>
                    <option value="CA">Draft</option>
                </select>

            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
    </form>


</x-admin-layout>
