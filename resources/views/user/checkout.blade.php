@extends('template')
@section('content')
    <form method="POST" action="{{ route('pesan') }}">

        @csrf
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
                    <div>
                        <p class="text-center font-semibold text-4xl pb-12">Shipping Address</p>
                    </div>

                    <div class="textarea-col">
                        <input required type="name" placeholder="Name" name="name"
                            class="border-gray-400 @error('name') border-red-500 @enderror textarea " />
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="country" name="province" id="province" class=" textarea-2">
                            <option value="">== Select Province ==</option>
                            @foreach ($provinces as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
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
                        <input required type="text" placeholder="Address" name="address"
                            class="border-gray-400 @error('address') border-red-500 @enderror textarea " />
                    </div>
                    <p class="text-red-500 text-xs italic mb-4"></p>
                    <div class=" textarea-col">
                        <input required type="phone" placeholder="Phone" name="phone"
                            class="border-gray-400 @error('phone') border-red-500 @enderror textarea " />
                    </div>
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
                                    <div class="flex items-center justify-between w-full bg-white">
                                        <label class="flex items-center">
                                            <input name="ship" value="18000" type="radio"
                                                class="form-radio h-5 w-5 text-gray-600"><span
                                                class="ml-2 text-sm text-gray-700  font-bold">Regular</span>
                                        </label>
                                        <span>3-4 Day</span>
                                        <span class="text-gray-600 text-sm font-semibold">Rp 18.000</span>
                                    </div>
                                    <div class="mt-6 flex items-center justify-between w-full bg-white">
                                        <label class="flex items-center">
                                            <input name="ship" value="45000" type="radio"
                                                class="form-radio h-5 w-5 text-gray-600"><span
                                                class="ml-2 text-sm text-gray-700 font-bold">One Day</span>
                                        </label>
                                        <span>1 Day</span>
                                        <span class="text-gray-600 text-sm font-semibold">Rp 45.000</span>
                                    </div>
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
                    @php
                        $total = 0;
                    @endphp
                    @for ($i = 0; $i < count($product); $i++)
                        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-3/5">
                                <div class="w-20">
                                    <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}"
                                        alt="photo">
                                </div>
                                <input type="hidden" name="item[{{ $i }}][qty]"
                                    value="{{ $product[$i]['qty'] }}">
                                <input type="hidden" name="item[{{ $i }}][id_product]"
                                    value="{{ $product[$i]['id_product'] }}">
                                <input type="hidden" name="item[{{ $i }}][orientation]"
                                    value="{{ $product[$i]['orientation'] }}">
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-bold text-sm">{{ $product[$i]['name'] }}</span>
                                    <span class="text-xs">Layout : {{ $product[$i]['orientation'] }}</span>
                                    <a  class="font-semibold hover:text-red-500 text-gray-500 text-xs">Quantity :
                                        {{ $product[$i]['qty'] }}</a>
                                    
                                </div>
                            </div>
                            <?php $price = explode('.', $product[$i]['price']); ?>
                            <span
                                class="text-center w-1/5 font-semibold text-sm">{{ 'Rp. ' . $product[$i]['price'] }}</span>
                            <span
                                class="text-center w-1/5 font-semibold text-sm">{{ 'Rp. ' . number_format(((int) ($price[0] . $price[1])) * $product[$i]['qty'], 0, '.', '.') }}</span>
                        </div>
                        @php
                            $total = $total + ($price[0] . $price[1]) * $product[$i]['qty'];
                        @endphp
                    @endfor


                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <span class="w-3/5"></span>
                        <span class="text-center w-1/5 font-semibold text-sm">SUBTOTAL</span>
                        <span
                            class="text-center w-1/5 font-semibold text-sm">{{ 'Rp. ' . number_format($total, 0, '.', '.') }}</span>
                    </div>

                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <span class="w-3/5"></span>
                        <span class="text-center w-1/5 font-semibold text-sm">SHIPPING COST</span>
                        <span class="shipping text-center w-1/5 font-semibold text-sm">Rp. -</span>
                    </div>

                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <span class="w-3/5"></span>
                        <span class="text-center w-1/5 font-semibold text-sm">TOTAL</span>
                        <span class="total text-center w-1/5 font-semibold text-sm">Rp. -</span>
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
                    <button
                        class="bg-gray-500 font-semibold hover:bg-gray-600 p-4 text-sm w-full rounded-md text-white uppercase">Print
                        Invoice</button>
                </span>
            </div>

        </section>
    </form>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $('input[type=radio]').click(function(e) {
                var formatter = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumFractionDigits: 0,
                });
                var shipping = parseInt($(this).val());
                console.log(shipping);
                $('.shipping').html(formatter.format(shipping));
                $('.total').html(formatter.format(parseInt('<?= $total ?>') + shipping))
            });
            $(function() {

                console.log('anjg')
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $('#province').on('change', function() {
                    console.log('waw')
                    $.ajax({
                        url: '{{ route('dependent-dropdown.store') }}',
                        method: 'POST',
                        data: {
                            id: $(this).val(),
                        },
                        success: function(response) {
                            $('#city').empty();
                            $('#district').empty();
                            $('#village').empty();

                            $.each(response, function(id, name) {
                                $('#city').append(new Option(name, id))
                            })
                        }
                    })
                });

                $('#city').on('change', function() {
                    console.log('waw')
                    $.ajax({
                        url: '{{ route('dependent-dropdown.store_city') }}',
                        method: 'POST',
                        data: {
                            id: $(this).val(),
                        },
                        success: function(response) {
                            $('#district').empty();
                            $('#village').empty();

                            $.each(response, function(id, name) {
                                $('#district').append(new Option(name, id))
                            })
                        }
                    })
                });

                $('#district').on('change', function() {
                    console.log('waw')
                    $.ajax({
                        url: '{{ route('dependent-dropdown.store_district') }}',
                        method: 'POST',
                        data: {
                            id: $(this).val(),
                        },
                        success: function(response) {
                            $('#village').empty();

                            $.each(response, function(id, name) {
                                $('#village').append(new Option(name, id))
                            })
                        }
                    })
                });
            });
        });
    </script>

@endsection
