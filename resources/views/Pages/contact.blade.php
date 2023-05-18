@extends('layouts.app')

@section('content')
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800  grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <h2 class="text-3xl font-bold mb-6">Contact us</h2>
                    <p class="text-gray-500 mb-6">
                        Please use any of those methods to contact me. If you are willing to order any service you can purchase it from store or message me
                        directly. Thank you very much
                    </p>
                    <p class="text-gray-500 mb-2">+8801823744169</p>
                    <p class="text-gray-500 mb-2">prantobd320@gmail.com</p>
                    <p class="text-gray-500 mb-2">Magura, Khulna, Bangladesh</p>
                </div>

                <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">

                    <a class="mr-2" href=""><i class="fa-solid fa-2xl fa-brands fa-github"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-facebook"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-linkedin"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-youtube"></i> </a>
                </div>

            </div>

            <div class="grow-0 bg-gray-200 p-4 rounded-lg shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-16 lg:px-6">
                <form>

                    <div class="form-group mb-6">
                        <p class="text-4xl text-bold">Contact Form</p>
                    </div>

                    <div class="form-group mb-6">
                        <x-input.textInput class="w-full" placeholder="Name">
                            </x-input>
                    </div>
                    <div class="form-group mb-6">
                        <x-input.textInput class="w-full" placeholder="Email">
                            </x-input>
                    </div>
                    <div class="form-group mb-6">
                        <textarea
                            class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
                            id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group form-check text-center mb-6">
                        <input type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                            id="exampleCheck87" checked>
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of
                            this
                            message</label>
                    </div>
                    <button type="submit"
                        class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Send</button>
                </form>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
@endsection
