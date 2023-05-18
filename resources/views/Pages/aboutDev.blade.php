@extends('layouts.app')

@section('content')
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800  grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col">
                <div class="name">Helllo</div>
                <div class="name">I am Pranto Biswas</div> 
                <div class="name">Full Stack Developer</div> 
                <div class="name">Lorem Ipsum was invented by Lorem Doto who was
                    an saint martin lander, who couldn't stay for long
                    time in this island.</div> 
                    
                <div class="grow-0 shrink-0 basis-auto md:mb-0 w-full md:w-6/12 ">
                    <a class="mr-2" href=""><i class="fa-solid fa-2xl fa-brands fa-github"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-facebook"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-linkedin"></i> </a>
                    <a class="mr-2" href=""><i class="fa-solid fa-brands fa-2xl fa-youtube"></i> </a>
                </div>

                <x-buttons.primary>Contact Me</x-buttons>

            </div>

            <div class="grow-0 p-4 rounded-lg shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-16 lg:px-6">
                <img src="" alt="Pranto">
            </div>

        </section>
        <!-- Section: Design Block -->

    </div>
@endsection
