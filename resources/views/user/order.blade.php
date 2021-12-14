@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="sec-title">My Order</h1>
    </div>

    <div class="box-format-order">
        <div class="flex items-center text-center rounded-lg">
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">20 DESEMBER 2021</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">#AB01973630</h3>
            <h3 class="font-semibold text-red-500 text-lg uppercase w-1/3">Belum Terbayar</h3>
        </div>

        <div>
            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

        </div>

        <div class="flex items-center">
            <span class="w-1/3"></span>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">TOTAL</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">Rp 833.000</h3>
        </div>
    </div>

    <div class="box-format-order">
        <div class="flex items-center text-center rounded-lg">
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">18 DESEMBER 2021</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">#AB01973619</h3>
            <h3 class="font-semibold text-blue-500 text-lg uppercase w-1/3">Sedang Diproses</h3>
        </div>

        <div>
            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

        </div>

        <div class="flex items-center">
            <span class="w-1/3"></span>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">TOTAL</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">Rp 833.000</h3>
        </div>
    </div>

    <div class="box-format-order">
        <div class="flex items-center text-center rounded-lg">
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">1 JANUARI 2021</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3">#AB01973599</h3>
            <h3 class="font-semibold text-green-500 text-lg uppercase w-1/3">Selesai</h3>
        </div>

        <div>
            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

            <div class="w-2/3 flex">
                <div class="w-1/2">
                    <img class="image-format-order mx-auto p-5" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="w-1/2 my-auto p-5">
                    <h1 class="font-bold text-gray-600 text-lg p-2">Magazine 20x30</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Layout : Landscape</h1>
                    <h1 class="font-semibold text-gray-600 p-2">Rp 345.000 x <span class="font-bold">2</span> </h1>
                </div>
            </div>

        </div>

        <div class="flex items-center">
            <span class="w-1/3"></span>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">TOTAL</h3>
            <h3 class="font-semibold text-gray-600 text-lg uppercase w-1/3 text-center">Rp 833.000</h3>
        </div>
    </div>
    

</section>

@endsection