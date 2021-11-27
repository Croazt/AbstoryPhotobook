@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">Our Product</h1>
        </div>
        <div class="text-center pb-12">
            <h1 class="text-2xl md:text-4xl text-center font-semibold">Pesanan #AB01973630</h1>
        </div>

        <div class="box-format-invoice">
            <div class="w-full items-center">
                <h3 class="font-semibold text-gray-600 text-xs uppercase p-2">Invoice #AB01973630</h3>
                <h3 class="font-semibold text-gray-600 text-xs uppercase p-2">16 November 2021 - 19.57</h3>  
                <h3 class="font-bold text-xs uppercase text-red-600 rounded-md p-2">Menunggu Pembayaran</h3>
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
                <div class="w-2/5">
                    <h3 class="font-semibold pb-4">Shipping To :</h3>
                    <h3 class="font-regular pb-4">Si Fulan bin Fulansyah</h3>
                    <h3 class="font-regular pb-4">Jln. Bagaskara No. 123, Kec. Salemba, Kota Mars,Nusa Tenggara Utara - 123456</h3>
                    <h3 class="font-regular">0812345678910</h3>
                </div>
                
                <div class="items-center justify-between p-5">
                    <div class="flex pb-5">
                        <div class="w-20 mx-5">
                            <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                        </div>
                        <div class="flex flex-col justify-between mx-5 flex-grow">
                            <span class="font-semibold text-sm">Magazine 20x30</span>
                            <span class="text-xs">Layout : Landscape</span>
                            <span class="text-xs">Quantity : 2</span>
                        </div>
                        <span class="text-center font-semibold text-sm ml-5">Rp 345.000</span>
                        <span class="text-center font-semibold text-sm ml-5">Rp 690.000</span>
                    </div>
                    <div class="flex pb-5">
                        <div class="w-20 mx-5">
                            <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                        </div>
                        <div class="flex flex-col justify-between mx-5 flex-grow">
                            <span class="font-semibold text-sm">Tambah Sheet Magazine</span>
                            <span class="text-xs">Variant : 20x30 Landscape</span>
                            <span class="text-xs">Quantity : 5</span>
                        </div>
                        <span class="text-center font-semibold text-sm ml-5">Rp 345.000</span>
                        <span class="text-center font-semibold text-sm ml-5">Rp 690.000</span>
                    </div>
                    <div class="flex pb-5">
                        <span class="mx-5 flex-grow text-right">Subtotal</span>

                        <span class="text-center font-semibold text-sm ml-5">Rp 815.000</span>
                    </div>
                    <div class="flex pb-5">
                        <span class="mx-5 flex-grow text-right">Shipping Cost</span>
                        <span class="text-center font-semibold text-sm ml-5">Rp 18.000</span>
                    </div>
                    <div class="flex pb-5">
                        <span class="mx-5 flex-grow text-right">Total</span>
                        <span class="text-center font-semibold text-sm ml-5">Rp 833.000</span>
                    </div>
                </div>

             </div>
        </div> 



        <div class="pt-12 ">
            <p class="text-left font-semibold text-4xl mx-8">Payment Method</p>
        </div>

        <div class="flex">
            <div class="w-1/5 item-center m-8">
                <img class="item-center mx-auto h-26" src="{{ asset('images/payment.png') }}" alt="">
            </div>
            <div class="w-2/5 text-left m-8 ">
                <p class="mt-6 font-bold">1902210673</p>
                <p class="mt-6 font-semibold">Si Fulan binti Fulansyah</p>
            </div>
            <div class="w-2/5 my-auto m-8">
                <div class="flex items-center hover:bg-gray-100 px-6 py-3">
                        <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Payment Confirmation</button>
                </div>
                <div class="flex items-center hover:bg-gray-100 px-6 py-3">
                        <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Home</button>
                </div>
            </div>
        </div>

</section>

@endsection