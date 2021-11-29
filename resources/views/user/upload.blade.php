@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h1 class="sec-title">Creating Your Photobook</h1>
    </div>

    <div class="flex space-x-5 ">
        <div id="" class="cursor-pointer">Mag 20x30 Landscape 1</div>
        <div id="" class="cursor-pointer">Mag 20x30 Landscape 2</div>
        <div id="" class="cursor-pointer">Tambah Sheet Mag</div>
    </div>

    <hr class="my-4 border-solid pb-12">

    <div class="box-format-uf">
        <div class="flex">
            <div class="w-1/3 text-left my-auto ">
                <p class="font-bold">Upload your photo!</p>
            </div>
            <div class="w-1/3 my-auto">
                <a href="" class="underline">Upload Rule</a>
            </div>
            <div class="w-1/3 my-auto m-8">
                <label class="w-64 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                    <span class="text-base leading-normal">Upload</span>
                    <input type='file' class="hidden" />
                </label>
            </div>
        </div>
    </div>

    <div class="box-format-uf">
        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim tempore voluptate porro adipisci vel laboriosam reiciendis libero distinctio saepe blanditiis voluptatum, officiis aliquid iste explicabo. Voluptas corporis hic delectus excepturi.</h1>
    </div>

</section>

@endsection