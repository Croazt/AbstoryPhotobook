@extends('template')
@section('content')
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="z-0 flex flex-col text-utama h-wrap pb-24">
        <div class="w-full">
            <p class="text-center font-bold text-7xl pb-12">Check Out</p>
        </div>
        <div class="w-full">
            <p class="text-center font-semibold text-4xl pb-12">Shipping Information</p>
        </div>
        <div class="flex pb-12 space-x-5 text-left">
            <div id="" class="cursor-pointer">My Address</div>
            <div id="" class="cursor-pointer">New Address</div>
        </div>
        <div class="w-192 self-center">
            <form method="POST" action="{{ route('register') }}">
                    <div>
                        <p class="text-center font-semibold text-4xl pb-12">Shipping Address</p>
                    </div>

                    <div class="textarea-col">
                        <input required type="name" placeholder="Name" name="name" class="border-gray-400 @error('name') border-red-500 @enderror textarea " />
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="country" name="province" id="province" class=" textarea-2">
                            <option value="">== Select Province ==</option>
                        </select>
                        <select placeholder="City" name="city" id='city' class=" textarea-2">
                            <option value="">== Select City ==</option>
                        </select>
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="district" name="district" id="district" class=" textarea-2">
                            <option value="">== Select District ==</option>
                        </select>
                        <select placeholder="village" name="village" id='village' class=" textarea-2">
                            <option value="">== Select Sub District ==</option>
                        </select>
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" textarea-col">
                        <input required type="text" placeholder="Address" name="address" class="border-gray-400 @error('address') border-red-500 @enderror textarea " />
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" textarea-col">
                        <input required type="phone" placeholder="Phone" name="phone" class="border-gray-400 @error('phone') border-red-500 @enderror textarea " />
                    </div>
            </form>

            <div class="pt-12 pb-12">
                <p class="text-center font-semibold text-4xl">Shipping Method</p>
            </div>
            <div class="flex">
                <div class="w-2/5 item-center m-8">
                    <img class="item-center mx-auto h-40" src="{{ asset('images/ekspedisi.png') }}" alt="">
                </div>
                <div class="w-3/5 items-center m-8">
                    <p class="font-bold">Total Weight : 3kg</p>
                        <div>
                            <div class="mt-6">
                                <button class="flex items-center justify-between w-full bg-white">
                                    <label class="flex items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-gray-600"><span class="ml-2 text-sm text-gray-700  font-bold">Regular</span>
                                    </label>
                                    <span>3-4 Day</span>
                                    <span class="text-gray-600 text-sm font-semibold">Rp 18.000</span>
                                </button>
                                <button class="mt-6 flex items-center justify-between w-full bg-white">
                                    <label class="flex items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-gray-600"><span class="ml-2 text-sm text-gray-700 font-bold">One Day</span>
                                    </label>
                                    <span>1 Day</span>
                                    <span class="text-gray-600 text-sm font-semibold">Rp 45.000</span>
                                </button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="pt-12 pb-12">
                <p class="text-center font-semibold text-4xl">Cart</p>
            </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-3/5">Product Details</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-3/5">
                        <div class="w-20">
                            <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                        <span class="font-bold text-sm">Magazine</span>
                        <span class="text-xs">Layout : Landscape</span>
                        <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Quantity : 2</a>
                        </div>
                    </div>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 345.000</span>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 690.000</span>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <div class="flex w-3/5">
                    <div class="w-20">
                        <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                    </div>
                    <div class="flex flex-col justify-between ml-4 flex-grow">
                    <span class="font-bold text-sm">Magazine</span>
                    <span class="text-xs">Variant : 20x30 Landscape</span>
                    <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Quantity : 4</a>
                    </div>
                </div>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 25.000</span>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 125.000</span>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <span class="w-3/5"></span>
                <span class="text-center w-1/5 font-semibold text-sm">SUBTOTAL</span>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 815.000</span>
                </div>

                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <span class="w-3/5"></span>
                <span class="text-center w-1/5 font-semibold text-sm">SHIPPING COST</span>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 18.000</span>
                </div>
                
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                <span class="w-3/5"></span>
                <span class="text-center w-1/5 font-semibold text-sm">TOTAL</span>
                <span class="text-center w-1/5 font-semibold text-sm">Rp 833.000</span>
                </div>
                </div>

                <div class="pt-12 ">
                <p class="text-center font-semibold text-4xl">Payment Method</p>
            </div>
            <div class="flex">
                <div class="w-1/5"></div>
                <div class="w-1/5 item-center m-8">
                    <img class="item-center mx-auto h-26" src="{{ asset('images/payment.png') }}" alt="">
                </div>
                <div class="w-2/5 items-center m-8 text-center">
                    <p class="mt-6 font-bold">1902210673</p>
                    <p class="mt-6 font-semibold">Si Fulan binti Fulansyah</p>
                </div>
                <div class="w-1/5"></div>
            </div>
            <span class="text-center mx-auto text-sm">
                <button class="bg-gray-500 font-semibold hover:bg-gray-600 p-4 text-sm w-full rounded-md text-white uppercase">Print Invoice</button>
            </span>
                
            </div>
            
    
  </div>
    
</section>

@endsection