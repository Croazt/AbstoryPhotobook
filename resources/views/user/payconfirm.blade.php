@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h1 class="sec-title">Payment Confirmation</h1>
    </div>
    <div class="text-center pb-12">
        <h1 class="text-2xl md:text-4xl text-center font-semibold">Pesanan #AB01973630</h1>
    </div>

    <div class="mx-auto m-8">
        <form method="" action="" class="pb-12">
                <div class="textarea-col">
                    <input required type="date" placeholder="Date" name="date" class="border-gray-400 @error('date') border-red-500 @enderror textarea " />
                </div>
                <div class=" textarea-col">
                    <input required type="text" placeholder="From Bank" name="from-bank" class="border-gray-400 @error('from-bank') border-red-500 @enderror textarea " />
                </div>
                <p class="text-red-500 text-xs italic mb-4"></p>
                <div class=" textarea-col">
                    <input required type="text" placeholder="Owner" name="name" class="border-gray-400 @error('phone') border-red-500 @enderror textarea " />
                </div>
        </form>
        <div class="w-1/3 my-auto m-8 mx-auto">
                <div class="flex items-center px-6 py-3 w-auto">
                        <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
                </div>
                <div class="flex items-center px-6 py-3">
                        <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Home</button>
                </div>
            </div>
    </div>

</section>

@endsection