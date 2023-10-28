<!DOCTYPE html>

<style>
    .tox-tinymce{
        border-radius: 10px;
    }
</style>

{{-- popup for img cropping  --}}
<div class="w-full min-h-screen bg-gray-900/50 backdrop-blur hidden justify-center items-center fixed z-50"
    id="popContainer">
    <div class="sub-container p-4 max-w-[500px]">

        <div class="flex justify-end hover:cursor-pointer" id="popCross">
            <div class="bg-red-600 rounded-xl text-yellow-200 text-right text-2xl px-3 py-1">X</div>
        </div>

        <div class="mb-6 flex flex-col bg-violet-950 text-white rounded-lg p-4 sm:flex-row">

            <div class="left">
                <label for="image" class="block mb-2 text-sm font-medium">Open Image</label>

                <label onclick=""
                    class="custom-file-upload text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 mr-2 py-2.5 text-center">
                    <input type="file" class="hidden" name="imageFile" id="image" required> Open
                </label>

                <a href=""> <button
                        class="text-white mt-4 my-2 bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  py-2 text-center">Remove</button></a>

            </div>

            <div class="right">
                <label for="upload-demo-product" class="block mb-2 text-center text-sm font-medium">Image
                    Preview</label>
                <div id="upload-demo-product" class=""></div>
                <div id="msgId" style="text-align: center; margin-bottom:10px;"></div>

            </div>
        </div>
        <div class=""><button id="saveProductImage"
                class="p-2 border rounded-md px-4 text-white bg-green-800">Save</button></div>
    </div>
</div>

<x-admin-layout>

    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif

    <form class=" py-10 px-10 rounded-lg h-auto bg-gray-200 dark:bg-gray-800" action="{{ route('saveProduct') }}"
        method="POST">

        @csrf
        <h2 class="p-2 text-4xl text-center">Add New Product</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 mt-5">

            <div class="lg:col-span-2">

                <div class="mb-6">
                    <label for="productTitle" class="block mb-2 text-sm font-medium">Title</label>
                    <input type="text" name="productTitle" id="productTitle"
                        class="shadow-sm  border text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="How to get a car loan?">
                </div>

                <div class="mb-6">
                    <label for="productShortDes" class="block mb-2 text-sm font-medium">Short Description</label>
                    <textarea type="text" name="productShortDes" id="productShortDes"
                        class="shadow-sm  border text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="How to get a car loan?"> </textarea>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium ">Description</label>
                    <textarea name="productDes" id="productDes"></textarea>
                </div>

            </div>


            <div class="space-y-4">

            <div class="pr-2 w-full">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                    <select id="countries" multiple name="categories[]"
                        class="bg-gray-50 border border-gray-300 overflow-auto text-gray-900 scroll-auto text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled value="" class="scroll-auto">Choose a category</option>

                        @foreach ($categories as $category)
                            <option class="p-2 border dark:border-gray-800 rounded" value="{{ $category->id }}">
                                {{ $category->catName }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="product_featured_div"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Featured
                    Image</label>

                <div id="product_featured_div"
                    class="w-full bg-gray-700 min-h-[200px] rounded-md flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                        version="1.1" id="Capa_1" width="50px" height="50px" viewBox="0 0 445.199 445.199"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M127.21,310.611h190.779c1.32,0,2.568-0.604,3.389-1.643c0.818-1.035,1.119-2.39,0.814-3.675    c-0.164-0.685-4.059-16.931-11.439-33.459c-10.445-23.392-22.441-35.251-35.65-35.251c-5.137,0-10.315,1.848-15.39,5.495    c-0.084,0.06-0.165,0.122-0.245,0.188c-2.949,2.459-5.785,5.422-8.789,8.561c-7.803,8.154-15.871,16.586-26.326,16.587    c-5.336,0.001-10.967-2.132-17.214-6.521c-5.665-3.979-11.953-5.996-18.689-5.996c-16.587,0-32.813,12.416-43.505,22.832    c-11.056,10.771-19.971,23.133-21.649,26.738c-0.622,1.338-0.519,2.899,0.274,4.144    C124.361,309.857,125.734,310.611,127.21,310.611z" />
                            <path
                                d="M435.198,343.061H393.06V62.139c0-5.523-4.477-10-10-10h-280.92V10c0-5.523-4.477-10-10-10h-30c-5.523,0-10,4.477-10,10    v42.139H10.001c-5.523,0-10,4.477-10,10v30c0,5.523,4.477,10,10,10h42.138v280.921c0,5.523,4.477,10,10,10h280.92v42.139    c0,5.523,4.477,10,10,10h30c5.523,0,10-4.477,10-10v-42.139h42.139c5.523,0,10-4.477,10-10v-30    C445.198,347.538,440.722,343.061,435.198,343.061z M343.06,102.139v240.921h-240.92V102.139H343.06z" />
                            <circle cx="270.856" cy="175.623" r="23.999" />
                        </g>
                    </svg>
                </div>

                <input type="hidden" class="" id="productImage" name="productImage" value="">

                <div class="pr-2 w-full">
                    <label for="regPrice" class="block mb-2 text-sm font-medium">Regular Price</label>
                    <input type="number" id="regPrice" name="regPrice"
                        class="shadow-sm  border  text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="Regular Price">
                </div>

                <div class="pr-2 w-full">
                    <label for="regPrice" class="block mb-2 text-sm font-medium">Sale Price</label>
                    <input type="number" id="salePrice" name="salePrice"
                        class="shadow-sm  border  text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sale Price">
                </div>

                <div class="pr-2 w-full">
                    <label for="email" class="block mb-2 text-sm font-medium">Tags</label>
                    <input type="email" id="email"
                        class="shadow-sm  border  text-sm rounded-lg text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ex - Best cooking, Desi cooking">
                </div>

                <div class="pr-2 w-full">
                    <label for="productStatus"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="productStatus" name="productStatus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected class="p-2">Choose a status</option>
                        <option value="public" class="p-2">Public</option>
                        <option value="raft" class="p-2">Draft</option>
                    </select>
                </div>

            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
        </div>
        </div>

    </form>

    <script>
        tinymce.init({
            selector: '#productDes',
            height: 400,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });


        var resize = $('#upload-demo-product').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 500,
                height: 320,
                type: 'squire' //circle
            },
            boundary: {
                width: 510,
                height: 330
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


        $('#saveProductImage').on('click', function(ev) {

            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(img) {

                if (img != null) {
                    document.getElementById('productImage').value = img
                    document.getElementById('product_featured_div').innerHTML = "Image Picked"
                    popContainer.style.display = "none"

                } else {
                    console.log('Getting Error');
                }
            });

            ev.preventDefault()
        });


        var imageDiv = document.getElementById("product_featured_div")
        var popContainer = document.getElementById("popContainer")
        var popCross = document.getElementById("popCross")

        imageDiv.onclick = function() {
            popContainer.style.display = "flex"
        }

        popCross.onclick = function() {
            popContainer.style.display = "none"
        }
    </script>
</x-admin-layout>
