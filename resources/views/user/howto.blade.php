@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="sec-title">How to Order Photobook?</h1>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step One</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/shopping-cart.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Masukkan produk yang mau kamu beli ke dalam cart.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Two</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/bag.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Checkout produk yang ada di dalam cart-mu, dan isi data pembelian <br> untuk kemudian lanjut ke proses pembayaran.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Three</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/credit-card.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Lakukan pembayaran sesuai nominal dan tujuan pembayaran yang <br> tertera di invoice.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Four</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/upload.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Upload foto-foto ke kamu ke dalam tempat yang sudah disediakan.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Five</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/heart.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Foto-foto kamu diproses untuk pembuatan layout photobook <br> sesuai dengan request yang kamu minta.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Six</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/editing.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Kamu dapat satu kali kesempatan untuk merevisi layout album <br> yang telah diberikan oleh Abstory. </h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Seven</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/check.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10">
                <h3 class="font-semibold text-gray-600 text-xl">Saat preview album sudah disetujui, photobook kamu akan langsung diproses untuk dicetak.</h3>
            </div>
        </div>
    </div>

    <div class="items-center text-center">
        <div class="mt-10">
            <div class="mx-auto">
                <h1 class="font-bold text-gray-600 text-xl">Step Eight</h1>
            </div>
            <div class="items-center text-center mt-10">
                <img class="w-32 mx-auto" src="{{ asset('images/icons/shipped.png') }}" alt="photo">   
            </div>
            <div class="mx-auto mt-10 mb-12">
                <h3 class="font-semibold text-gray-600 text-xl">Photobook yang sudah jadi akan segera dikirim ke alamat kamu.</h3>
            </div>
        </div>
    </div>

</section>

@endsection