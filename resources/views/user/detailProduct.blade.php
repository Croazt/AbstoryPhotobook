@extends('template')
@section('content')
    <div class="z-0 flex flex-col text-utama h-wrap pt-12 pb-24">
        <div class="w-6/12 mb-20 self-center">
            <p class="text-center font-bold text-7xl">{{ $data[0]->name }}</p>
        </div>
        <div class="w-4/5 self-center flex justify-start">
            <div class="container flex flex-wrap mx-auto w-1/3">
                <div class="w-full p-2 rounded">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                        alt="image">
                </div>
            </div>
            <div class="w-2/3 pt-4 pl-10">
                <form action="{{route('addCart')}}" method="POST" >
                    @csrf
                    <p class="text-2xl text-utama">Price : {{ $data[0]->price }}</p>

                    <input type="hidden" name="id_product" value="{{ $data[0]->id }}">
                    <div class="flex mt-5">
                        <div class="">
                            <p class="text-xl text-utama">Variant :</p>
                        </div>
                        @if ($data[0]->orientation == '1')

                            <div class="ml-5">
                                <div class="">
                                    <input type="radio" id="port" value="Portrait" name="orientation">
                                    <label class="text-xl" for="port">Portrait</label>
                                </div>
                                <div class="">
                                    <input type="radio" value="Landscape" name="orientation">
                                    <label class="text-xl" for="lands">Landscape</label>
                                </div>
                            </div>
                        @elseif($data[0]->orientation == '2')
                            <input id="orie" type="hidden" value="Portrait" name="orientation">
                            <label class="text-xl" for="orie">Portrait</label>
                        @elseif($data[0]->orientation == '3')
                            <input id="orie" type="hidden" value="Landscape" name="orientation">
                            <label class="text-xl" for="orie">Landscape</label>
                        @else
                            <input id="orie" type="hidden" value="Square" name="orientation">
                            <label class="text-xl" for="orie">-</label>
                        @endif
                    </div>
                    <div class="flex mt-5">

                        <div class="">
                            <p class="text-xl text-utama">Jumlah :</p>
                        </div>
                        <input class="ml-5 border text-center w-8" type="number" name="qty" value="1">
                    </div>
                    <div class="flex-col flex">
                        <button type="submit" value="Order" name="action" class="button mb-4 mt-12">Order Now</button>
                        <button type="submit" value="Cart" name="action" class="button mb-4 ">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-10 text-center text-utama font-semibold w-2/3 self-center">

            <p class="text-2xl mb-4">Description Detail</p>
            <p class="text-2lg">{!! $data[0]->description !!}</p>
        </div>
    </div>
@endsection
