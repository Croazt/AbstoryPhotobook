@extends('template')
@section('content')

    <!--<link href="{{ asset('css/carousal.css') }}" rel="stylesheet" type="text/css">

                                                        <div class="carousel">
                                                            <div class="carousel-inner">
                                                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                                                                <div class="carousel-item">
                                                                    <img src="{{ asset('images/Magazine/IMG_1041-01.jpeg') }}">
                                                                </div>
                                                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                                                                <div class="carousel-item">
                                                                    <img src="{{ asset('images/Magazine/IMG_1034-01.jpeg') }}">
                                                                </div>
                                                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                                                                <div class="carousel-item">
                                                                <img src="{{ asset('images/Magazine/IMG_1039-01.jpeg') }}">
                                                                </div>
                                                                <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                                                                <label for="carousel-2" class="carousel-control next control-1">›</label>
                                                                <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                                                                <label for="carousel-3" class="carousel-control next control-2">›</label>
                                                                <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                                                                <label for="carousel-1" class="carousel-control next control-3">›</label>
                                                                <ol class="carousel-indicators">
                                                                    <li>
                                                                        <label for="carousel-1" class="carousel-bullet">-</label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="carousel-2" class="carousel-bullet">-</label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="carousel-3" class="carousel-bullet">-</label>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                        </div>

                                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                            </div>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                <img src="{{ asset('images/Magazine/IMG_1041-01.jpeg') }}" class="d-block w-100" alt="...">
                                                                </div>
                                                                <div class="carousel-item">
                                                                <img src="{{ asset('images/Magazine/IMG_1034-01.jpeg') }}" class="d-block w-100" alt="...">
                                                                </div>
                                                                <div class="carousel-item">
                                                                <img src="{{ asset('images/Magazine/IMG_1039-01.jpeg') }}" class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </button>
                                                        </div>-->

    <!-- OUR PRODUCT -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">
                Our Product
            </h1>
        </div>
        <div class="flex pb-12 space-x-5">
            <div id="all" class="cursor-pointer">All Product</div>
            <div id="mag" class="cursor-pointer">Magazine</div>
            <div id="pre" class="cursor-pointer">Premiere</div>
            <div id="lux" class="cursor-pointer">Luxury</div>
        </div>

        <div id="ShowProduct" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 tab-all-product">

        </div>

    </section>

    <!-- WHATS ABSTORY OFFER -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">
                Whats Abstory Offer
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 tab-all-product">
            <div class="box-format-wao">
                <div class="mb-4">
                    <img class="image-format-wao" src="{{ asset('images/icons/quality.png') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wao">Premium Quality</p>
                </div>
            </div>
            <div class="box-format-wao">
                <div class="mb-4">
                    <img class="image-format-wao" src="{{ asset('images/icons/time.png') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wao">Quickly Done</p>
                </div>
            </div>
            <div class="box-format-wao">
                <div class="mb-4">
                    <img class="image-format-wao" src="{{ asset('images/icons/like.png') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wao">Beautiful Design</p>
                </div>
            </div>
            <div class="box-format-wao">
                <div class="mb-4">
                    <img class="image-format-wao" src="{{ asset('images/icons/shipped.png') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wao">Shipping Cost Subsidized</p>
                </div>
            </div>

        </div>

    </section>

    <!-- Paralax -->
    <section class="">
        <div>
            <img src="{{ asset('images/home/LP4-crop.png') }}" alt="" class="bg-auto">
        </div>
    </section>

    <!-- OUR PRODUCT -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">
                Best Seller
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 tab-all-product">
            <div>
                <div class="mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag20x30l.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x30</p>
                    <p class="text-base-op">Rp 345.000</p>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x20</p>
                    <p class="text-base-op">Rp 320.000</p>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/DSCF8754-01.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 15x20</p>
                    <p class="text-base-op">Rp 245.000</p>
                </div>
            </div>
        </div>

    </section>

    <!-- What they Says -->
    <section class=" mx-auto px-4 sm:px-6 lg:px-6 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">
                What They Says
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-6 gap-6 tab-all-product">
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/adzana.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Adzana Shaliha</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam
                        eaque voluptatem explicabo repellat modi id cupiditate illo minima? Minima fugit velit tempora sint
                        veniam iure, doloribus reiciendis officiis quod?</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/angelina.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Angelina Christy</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores odio
                        aperiam officia, exercitationem libero soluta, illo quisquam expedita quibusdam amet sed maiores
                        molestias veritatis tempore dignissimos! Ipsum aperiam dolor possimus.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/aninditha.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Aninditha Rahma Cahyadi</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus
                        quasi distinctio voluptatum nesciunt dolorum omnis est maiores esse, at facere cupiditate veniam,
                        aliquid blanditiis modi nemo. Impedit, repellat iure.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/ariella.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Ariella Calista Ichwan</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora iusto odio
                        voluptates natus maiores id nam, beatae quo, officiis ipsam praesentium quod numquam repudiandae non
                        molestias consequatur eos quas itaque!</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/azizi.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Azizi Asadel</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ad nesciunt?
                        Ratione molestias ex culpa! Beatae, non facilis id harum consectetur officiis eius blanditiis
                        voluptatibus repellendus distinctio atque odio minima!</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/cindy.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Cindy Hapsari Maharani</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fuga corporis
                        aliquam a accusamus optio, quidem ullam. Porro animi nemo doloremque, nulla sint veritatis libero ex
                        vel assumenda qui atque.</p>
                </div>
            </div>
        </div>

    </section>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $('#ShowProduct').slideUp(400)
            $.ajax({
                url: '{{ route('getProduct', 'all') }}',
                method: 'GET',
                success: function(response) {
                    console.log(response);
                    $.each(response, function(id, item) {
                        $('#ShowProduct').append(
                            "<div><div class='mb-4'><img class='image-format-op' src='{{ asset('images/images/mag20x30l.jpeg') }}' alt='photo'></div><div class='text-center'><p class='text-xl-op'>" +
                            item.name + "</p><p class='text-base-op'>" + item.price +
                            "</p></div></div>"
                        )
                    })
                    $('#ShowProduct').slideDown(400)
                }
            })
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $('#all').on('click', function() {
                    $('#ShowProduct').slideUp(400)
                    $.ajax({
                        url: '{{ route('getProduct', 'all') }}',
                        method: 'GET',
                        success: function(response) {
                            
                            $('#ShowProduct').empty()
                            $.each(response, function(id,
                                item) {
                                $('#ShowProduct')
                                    .append(
                                        "<div><div class='mb-4'><img class='image-format-op' src='{{ asset('images/images/mag20x30l.jpeg') }}' alt='photo'></div><div class='text-center'><p class='text-xl-op'>" +
                                        item.name +
                                        "</p><p class='text-base-op'>" +
                                        item
                                        .price +
                                        "</p></div></div>"
                                    )
                            })
                            $('#ShowProduct').slideDown(400)
                        }
                    })
                });

                $('#mag').on('click', function() {
                    $('#ShowProduct').slideUp(400)
                    $.ajax({
                        url: '{{ route('getProduct', 'Magazine') }}',
                        method: 'GET',
                        success: function(response) {

                            
                            $('#ShowProduct').empty()
                            $.each(response, function(id,
                                item) {
                                $('#ShowProduct')
                                    .append(
                                        "<div><div class='mb-4'><img class='image-format-op' src='{{ asset('images/images/mag20x30l.jpeg') }}' alt='photo'></div><div class='text-center'><p class='text-xl-op'>" +
                                        item.name +
                                        "</p><p class='text-base-op'>" +
                                        item
                                        .price +
                                        "</p></div></div>"
                                    )
                            })
                            $('#ShowProduct').slideDown(400)
                        }
                    })
                });
                $('#pre').on('click', function() {
                    $('#ShowProduct').slideUp(400)
                    $.ajax({
                        url: '{{ route('getProduct', 'Premium') }}',
                        method: 'GET',
                        success: function(response) {
                            
                            $('#ShowProduct').empty()
                            $.each(response, function(id,
                                item) {
                                $('#ShowProduct')
                                    .append(
                                        "<div><div class='mb-4'><img class='image-format-op' src='{{ asset('images/images/mag20x30l.jpeg') }}' alt='photo'></div><div class='text-center'><p class='text-xl-op'>" +
                                        item.name +
                                        "</p><p class='text-base-op'>" +
                                        item
                                        .price +
                                        "</p></div></div>"
                                    )
                            })
                            $('#ShowProduct').slideDown(400)
                        }
                    })
                });
                $('#lux').on('click', function() {
                    $('#ShowProduct').slideUp(400)
                    $.ajax({
                        url: '{{ route('getProduct', 'Luxury') }}',
                        method: 'GET',
                        success: function(response) {
                             
                            $('#ShowProduct').empty()
                            $.each(response, function(id,
                                item) {
                                $('#ShowProduct')
                                    .append(
                                        "<div><div class='mb-4'><img class='image-format-op' src='{{ asset('images/images/mag20x30l.jpeg') }}' alt='photo'></div><div class='text-center'><p class='text-xl-op'>" +
                                        item.name +
                                        "</p><p class='text-base-op'>" +
                                        item
                                        .price +
                                        "</p></div></div>"
                                    )
                            })
                            $('#ShowProduct').slideDown(400)
                        }
                    })
                });

            });
        });
    </script>
@endsection
