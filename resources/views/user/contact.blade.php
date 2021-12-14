@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="sec-title">Contact Us</h1>
    </div>

    <div class="flex w-full">
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/whatsapp.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">+62 8149 6745 9898</h3>
            </div>
        </div>
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/instagram.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">@abstory_photobook</h3>
            </div>
        </div>
    </div>

    <div class="flex w-full">
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/email.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">abstoryku@gmail.com</h3>
            </div>
        </div>
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/facebook.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">Abstory Photobook</h3>
            </div>
        </div>
    </div>

    <div class="flex w-full">
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/placeholder.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">Malang, Indonesia</h3>
            </div>
        </div>
        <div class="flex w-1/2 mt-10 mb-10">
            <div class="items-center text-center w-1/2">
                <img class="w-24 mx-auto" src="{{ asset('images/icons/youtube.png') }}" alt="photo">   
            </div>
            <div class="mx-auto my-auto w-1/2">
                <h3 class="font-semibold text-gray-600 text-xl">Abstory Photobook</h3>
            </div>
        </div>
    </div>
    

</section>

@endsection