@extends('template')
@section('content')

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">DETAIL PESANAN</h1>
        </div>
        <div class="text-center pb-12">
            <h1 class="text-2xl md:text-4xl text-center font-semibold">NOMOR {{ $pesanan[0]->id }}</h1>
        </div>

        <div class="box-format-invoice">
            <div class="w-full items-center pb-12">
                <h3 class="font-semibold text-gray-600 text-xs uppercase p-2">Invoice {{ $pesanan[0]->id }}</h3>
                <h3 class="font-semibold text-gray-600 text-xs uppercase p-2">
                    {{ $pesanan[0]->created_at->format('d F Y - H.i') }}</h3>

                @if ($pesanan[0]->status == 0)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Menunggu Pembayaran</h3>

                @elseif ($pesanan[0]->status == 1)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Pembayaran Belum Dikonfirmasi</h3>
                @elseif ($pesanan[0]->status == 2)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Dalam Proses Pembuatan</h3>

                @elseif ($pesanan[0]->status == 3)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Dalam Proses Pengemasan</h3>

                @elseif ($pesanan[0]->status == 4)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Dikirim</h3>

                @elseif ($pesanan[0]->status == 5)
                    <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Selesai</h3>

                @endif
            </div>

            <!--
                                                     <div class="flex items-cente mx-auto p-6">
                                                            <div class="flex">
                                                                <div class="w-1/5">
                                                                    <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                                                                </div>
                                                                <div class="flex flex-col justify-between ml-4 flex-grow w-1/5">
                                                                    <span class="font-bold text-sm">Magazine</span>
                                                                    <span class="text-xs">Layout : Landscape</span>
                                                                    <span class="text-xs">Quantity : 2</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-center font-regular text-sm w-1/5 mx-2 sm:mx-4">Rp 345.000</div>
                                                            <div class="text-center font-regular text-sm w-1/5 mx-2 sm:mx-4">Rp 690.000</div>
                                                            
                                                    </div>
                                                    -->


            <div class="flex w-full items-center">
                <div class="p-2 pb-12">
                    <h3 class="font-semibold">Shipping To :</h3>
                    <h3 class="font-regular">{{ $pesanan[0]->name }}</h3>
                    <h3 class="font-regular">{{ $pesanan[0]->address }}</h3>
                    <h3 class="font-regular">{{ $pesanan[0]->phone }}</h3>
                </div>
            </div>


            <div class="w-full items-center justify-between p-5">
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-2/4 text-center">Product Details
                    </h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/4 text-center">Price</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/4 text-center">Total</h3>
                </div>
                @php
                    $total = 0;
                @endphp
                @foreach ($pesananProduk as $item)

                    <div class="flex pb-5">
                        <div class="w-1/4">
                            <img class="image-format-op w-40" src="{{ asset('images/images/mag15x15s.jpeg') }}"
                                alt="photo">
                        </div>
                        <div class="flex flex-col mx-5 flex-grow w-1/4">
                            <span class="font-semibold text-sm mt-4">Magazine 20x30</span>
                            <span class="text-xs mt-4">Layout : {{ $item->orientation }}</span>
                            <span class="text-xs mt-4">Quantity : {{ $item->qty }}</span>
                        </div>

                        <?php $price = explode('.', $item->price); ?>
                        <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp {{ $item->price }}</div>
                        <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp
                            {{ number_format(((int) ($price[0] . $price[1])) * $item->qty, 0, '.', '.') }}</div>
                    </div>

                    @php
                        $total = $total + ($price[0] . $price[1]) * $item->qty;
                    @endphp
                @endforeach


                <div class="flex pb-5">
                    <div class="mx-5 flex-grow text-right w-3/4">Subtotal</div>
                    <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp
                        {{ number_format(((int) $total), 0, '.', '.') }}</div>
                </div>
                @php
                    $shipcost = 0;
                @endphp
                @if ($pesanan[0]->metode == 'reguler')
                    @php
                        $shipcost = 18000;
                    @endphp
                    <div class="flex pb-5">
                        <div class="mx-5 flex-grow text-right w-3/4">Shipping Cost</div>
                        <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp 18.000</div>
                    </div>
                @else
                    @php
                        $shipcost = 45000;
                    @endphp
                    <div class="flex pb-5">
                        <div class="mx-5 flex-grow text-right w-3/4">Shipping Cost</div>
                        <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp 45.000</div>
                    </div>
                @endif


                <div class="flex pb-5">
                    <div class="mx-5 flex-grow text-right w-3/4">Total</div>
                    <div class="text-center font-semibold text-sm ml-5 w-1/4">Rp
                        {{ number_format(((int) ($total + $shipcost)), 0, '.', '.') }}</div>
                </div>

            </div>
        </div>



        <div class="pt-12 ">
            <p class="text-left font-semibold text-4xl mx-8">Payment Method</p>
        </div>

        <div class="flex">
            <div class="w-1/3 item-center m-8">
                <img class="item-center mx-auto h-26" src="{{ asset('images/payment.png') }}" alt="">
            </div>
            <div class="w-1/3 text-left m-8 my-auto ">
                <p class="mt-6 font-bold">1902210673</p>
                <p class="mt-6 font-semibold">Si Fulan binti Fulansyah</p>
            </div>
            <div class="w-1/3 my-auto m-8">
                @if ($pesanan[0]->status == 0)
                    <a href="{{ route('payconfirm', $pesanan[0]->id) }}">
                        <div class="flex items-center px-6 py-3">
                            <button
                                class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Payment
                                Confirmation</button>
                        </div>
                    </a>
                @elseif($pesanan[0]->status >= 2)
                    <a href="{{ route('album', $pesanan[0]->id) }}">
                        <div class="flex items-center px-6 py-3">
                            <button
                                class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Create Album</button>
                        </div>
                    </a>
                @endif

                <a href="">
                    <div class="flex items-center px-6 py-3">
                        <button
                            class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Home</button>
                    </div>
                </a>
            </div>
        </div>

    </section>

@endsection
