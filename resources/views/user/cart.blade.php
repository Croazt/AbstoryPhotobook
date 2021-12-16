@extends('template')
@section('content')

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">

        <div class="text-center pb-12">
            <h1 class="sec-title">CART</h1>
        </div>
        <div class="flex mt-10 mb-5">
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
        @php
            $total=0;
        @endphp
        <form action="{{ route('checkoutView') }}" method="post">
            @csrf
            @foreach ($product as $key => $data)
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5">
                        <div class="w-20">
                            <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                        </div>
                        <input type="hidden" name="item[{{$key}}][id_product]" value="{{$data->id}}">
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">{{$data->name . '('.$data->orientation.')'}}</span>
                            <span class="text-xs">{{$data->category}}</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                        </div>
                    </div>
                    <input type="hidden" name="item[{{$key}}][orientation]" type="text" value="{{$data->orientation}}">
                    <input type="hidden" name="item[{{$key}}][name]" type="text" value="{{$data->name}}">
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>

                        <input class="mx-2 border text-center w-8" name="item[{{$key}}][qty]" type="text" value="{{$data->qty}}">
                        <input class="mx-2 border text-center w-8" name="item[{{$key}}][price]" type="hidden" value="{{$data->price}}">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>
                    </div>
                    <?php $price = explode('.',$data->price) ?>
                    <span class="text-center w-1/5 font-semibold text-sm">{{'Rp. '.$data->price}}</span>
                    <span class="text-center w-1/5 font-semibold text-sm">{{'Rp. '.number_format((((int)($price[0].$price[1]))*$data->qty), 0, '.', '.')}}</span>
                </div>
                @php
                  $total = $total +($price[0].$price[1])*$data->qty;   
                @endphp
            @endforeach



            <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <span class="w-3/5"></span>
                <span class="text-center w-1/5 font-semibold text-sm">TOTAL COST</span>
                <span class="text-center w-1/5 font-semibold text-sm">{{'Rp. '.number_format(((int)($total)), 0, '.', '.')}}</span>
            </div>

            <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <span class="w-4/5"></span>
                <span class="text-center w-1/5 text-sm">
                    <button type="submit"
                        class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase">Checkout</button>
                </span>
            </div>
        </form>
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
            <span class="w-4/5"></span>
            <span class="text-center w-1/5 text-sm">
                <button
                    class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase"> <a href="{{ route('home')}}">Continue
                    Shopping</a> </button>
            </span>
        </div>
    </div>

@endsection
