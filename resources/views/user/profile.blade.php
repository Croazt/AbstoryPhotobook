@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center mb-12">
            <h1 class="sec-title">My Profile</h1>
        </div>

        <div class="flex items-center mt-12 mb-12">
            <div class="mx-auto">
                <img class="image-format-mp" src="{{ asset('images/profile/shani.jpg') }}" alt="photo">
            </div>
        </div>
        
        <div class="box-format-mp">
            <div class="flex mx-auto px-4 sm:px-6 lg:px-6 py-12">
                <div class="w-1/2">
                    <div class="my-2">
                        <h1 class="font-bold">Name</h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-bold">Nomer Handphone</No></h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-bold">Email</h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-bold">Address</h1>
                    </div>
                </div>

                <div class="w-1/2 text-coolGray-600">
                    <div class="my-2">
                        <h1 class="font-semibold">Shani Indira Natio</h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-semibold">+62 8111 0876 32310</h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-semibold">Email@gmail.com</h1>
                    </div>
                    <div class="my-2">
                        <h1 class="font-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam rerum voluptate eligendi fugit</h1>
                    </div>
                </div>
            </div>
        </div>

        

</section>

@endsection