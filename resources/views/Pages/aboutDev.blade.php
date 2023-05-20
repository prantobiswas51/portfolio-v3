@extends('layouts.app')

@section('content')
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class=" mx-auto grid gap-8 grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col text-xl justify-center rounded-lg p-4">
                <div class="name">Hello</div>
                <div class="name flex"> <h1>I am </h1><h1 class="text-4xl font-harlow px-4"> Pranto Biswas </h1></div>
                <div class="name">Full Stack Developer</div>
                <div class="name">Lorem Ipsum was invented by Lorem Doto who was
                    an saint martin lander, who couldn't stay for long
                    time in this island.</div>

                <div class="grow-0 my-4 shrink-0 basis-auto md:mb-0 w-full md:w-6/12 ">
                    <a class="mr-2" href=""><i class="fa-solid fa-2xl fa-brands fa-github"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-facebook"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-linkedin"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-youtube"></i> </a>
                </div>

                <div class="">
                    <x-buttons.primary class="my-4 justify-center">Contact Me</x-buttons>
                </div>
            </div>

            <div class="p-4 flex content-center self-center align-baseline rounded-lg  px-16">
                <img class="avatar mx-auto floating" src="{{ asset('images/pranto.png') }}" alt="Pranto">            
            </div>

        </section>
        <!-- Section: Design Block -->

    </div>
@endsection
