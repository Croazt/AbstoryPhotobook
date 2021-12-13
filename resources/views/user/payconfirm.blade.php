@extends('template')
@section('content')

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="sec-title">Payment Confirmation</h1>
        </div>
        <div class="text-center pb-12">
            <h1 class="text-2xl md:text-4xl text-center font-semibold">Pesanan {{ $data }}</h1>
        </div>

        <div class="mx-auto m-8">
            <form method="POST" action="{{route("sendpay", $data)}}" enctype="multipart/form-data" class="pb-12">
                @csrf
                <div class="textarea-col">
                    <input required type="file" placeholder="Payment Proof" name="proof"
                        class="border-gray-400 @error('proof') border-red-500 @enderror textarea" />
                </div>
                <div class="w-1/3 my-auto m-8 mx-auto">
                    <div class="flex items-center px-6 py-3 w-auto">
                        <button type="submit"
                            class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
                    </div>
                    <div class="flex items-center px-6 py-3">
                        <button
                            class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Home</button>
                    </div>
                </div>
            </form>
        </div>

    </section>

@endsection
