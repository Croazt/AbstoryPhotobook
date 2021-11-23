@extends('template')
@section('content')

    <section>        
        <div class="sliderAx h-auto max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url('images/images/Cropped-1.jpg')">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#" class="bg-gray-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                    </div>  
                </div> <!-- container -->
            </div>

            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url('images/images/Cropped-2.jpg')">
            
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-gray-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                
                </div> <!-- container -->
            </div>
        </div>
    </section>

    <!-- OUR PRODUCT -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">
                Our Product
            </h1>
        </div>
        <div class="pagination text-center pb-12 space-x-5">
            <a href="" class="page-item current-page">All Product</a>
            <a href="" class="page-item current-page">Magazine</a>
            <a href="" class="page-item current-page">Product</a>
            <a href="" class="page-item current-page">Luxury</a>
        </div>

        <div class="card-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 tab-all-product">
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag20x30l.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x30</p>
                    <p class="text-base-op">Rp 345.000</p>
                </div>
            </div>
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag15x15s.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x20</p>
                    <p class="text-base-op">Rp 320.000</p>
                </div>
            </div>
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/DSCF8754-01.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 15x20</p>
                    <p class="text-base-op">Rp 245.000</p>
                </div>
            </div>
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag30x30s.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 30x30</p>
                    <p class="text-base-op">Rp 750.000</p>
                </div>
            </div>
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag20x30p.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x30</p>
                    <p class="text-base-op">Rp 550.000</p>
                </div>
            </div>
            <div>
                <div class="card mb-4">
                    <img class="image-format-op" src="{{ asset('images/images/mag20x20s.jpeg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-op">Magazine 20x20</p>
                    <p class="text-base--op">Rp 500.000</p>
                </div>
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
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/angelina.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Angelina Christy</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/aninditha.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Aninditha Rahma Cahyadi</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/ariella.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Ariella Calista Ichwan</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/azizi.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Azizi Asadel</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts flex">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
            <div class="box-format-wts">
                <div class="m-4">
                    <img class="image-format-wts" src="{{ asset('images/profile/cindy.jpg') }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl-wts">Cindy Hapsari Maharani</p>
                    <p class="text-xl-wts">1 Januari 2021</p>
                    <p class="text-base-wts">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, doloribus quasi distinctio voluptatum nesciunt.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-6 py-12">
            <div class="box-format-wts">
                <div class="text-center p-12">
                    <a href="">
                        <h1 class="sec-title">
                        More Information? Click Here!       
                        </h1>
                    </a>
                </div>
            </div>
        </section>
@endsection
