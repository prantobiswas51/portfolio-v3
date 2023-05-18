@extends('layouts.app')

@section('content')
    
<div class="grid grid-cols-2 md:grid-cols-3 gap-8 container my-24 px-6 mx-auto">

    <div class="">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
        <div class="my-2">March 13, 2023</div>
        <h2 class="text-2xl my-2">How to design web templates in 2023</h2>
        <div class="excert">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. </div>
        <x-buttons.primary>Read More</x-buttons>
    </div>

    <div class="">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        <div class="my-2">March 13, 2023</div>
        <h2 class="text-2xl my-2">How to design web templates in 2023</h2>
        <div class="excert">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. </div>
        <x-buttons.primary>Read More</x-buttons>
    </div>

    <div class="">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        <div class="my-2">March 13, 2023</div>
        <h2 class="text-2xl my-2">How to design web templates in 2023</h2>
        <div class="excert">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. </div>
        <x-buttons.primary>Read More</x-buttons>
    </div>
    
</div>

@endsection
