<x-admin-layout>

    <div class="flex flex-col md:flex-row">

        <div class=" basis-1/2 mr-2">


            <form class=" py-10 px-10 rounded-lg bg-gray-200 dark:bg-gray-800">

                <h2 class="p-2 text-4xl text-center">Create New Category</h2>

                <div class="mb-6">
                    <label for="catName" class="block mb-2 text-sm font-medium">Name</label>
                    <input type="text" required name="catName" id="catName"
                        class="shadow-sm  border text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="How to get a car loan?">
                </div>

                <div class="mb-6">
                    <label for="catSlug" class="block mb-2 text-sm font-medium">Slug</label>
                    <input type="text" required name="catSlug" id="catSlug"
                        class="shadow-sm  border text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="How to get a car loan?">
                </div>

                <div class="mb-6">
                    <label for="catMessage" class="block mb-2 text-sm font-medium ">Description</label>
                    <textarea required id="catMessage" name="catMessage" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="To get your car loan you need to feel this ....."></textarea>
                </div>

                <div class="mb-6 flex flex-col sm:flex-row">
                    <div class="left">
                        <label for="image" class="block mb-2 text-sm font-medium">Image</label>

                        <label onclick=""
                            class="custom-file-upload text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <input type="file" class="hidden" name="imageFile" id="image" required> Open
                        </label>

                        <button type="submit"
                            class="text-white mt-4 my-2 bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Remove</button>


                    </div>
                    <div class="right">
                        <label for="email" class="block mb-2 text-center text-sm font-medium">Image Preview</label>
                        <div id="upload-demo" class=""></div>
                        <div id="msgId" style="text-align: center; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div id="toast-success" class=" text-green-600 my-2"></div>
                <div class="">
                    <button type="submit" id="saveCat"
                        class="saveCat text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>

                </div>
            </form>

        </div>




        {{-- Right side / view cat side  --}}
        <div class=" basis-1/2 ml-2">
            <h2 class="pb-2 text-2xl">List of Categories</h2>

            @foreach ($categories as $category)
                <div class="shadow-md rounded bg-gray-700 flex mb-2">
                    <div class="img">
                        <img src="{{ asset('storage/admin/categories/' . $category->catImageUrl) }}" class="max-w-[88px] rounded max-h-[88px]" alt="Cat">
                    </div>

                    <div class="des p-2 flex justify-between self-center pl-4">
                        <div class="flex flex-col">
                            <span>{{ $category->catName }}</span>
                            <span class="">{{ $category->catSlug }}</span>
                        </div>
                        <div class="flex ml-4 text-right">
                            <a href=""><button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center m-1 p-3">Edit</button></a>
                            <a href=""><button type="submit"
                                    class="text-white bg-yellow-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center m-1 p-3">View</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>


<script>
    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: {
            width: 88,
            height: 88,
            type: 'squire' //circle
        },
        boundary: {
            width: 120,
            height: 120
        }
    });


    $('#image').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            resize.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('Jquery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });


    $('#saveCat').on('click', function(ev) {

        resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(img) {

            var formData = {
                catName: $("#catName").val(),
                catSlug: $("#catName").val(),
                catMessage: $("#catName").val(),
            };

            if (img != null && catName != null && catSlug != null && catMessage != null) {

                $.post("{{ route('saveCat') }}", {
                        'image': img,
                        'formData': formData,
                        '_token': "{{ csrf_token() }}"
                    },
                    function(data, status) {
                        if (status == "success") {
                            document.getElementById('toast-success').innerHTML = "Category Created Succesfully"
                        }
                    });

            } else {
                console.log('Getting Error');
            }
        });

        ev.preventDefault()
    });


</script>
