@extends('template')
@section('content')

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center mb-12">
            <h1 class="sec-title">Creating Your Photobook</h1>
        </div>

        <div class="flex space-x-5 ">
            @foreach ($data as $item)
                <div id="" class="cursor-pointer">{{ $item->name }}</div>

            @endforeach
        </div>
        @foreach ($data as $item)

            <hr class="my-4 border-solid mb-12">
            @if ($item->album->count() == 0)

                <div class="box-format-uf">
                    <div class="flex">
                        <div class="w-1/3 text-left my-auto ">
                            <p class="font-bold">Upload your photo!</p>
                        </div>
                        <div class="w-1/3 my-auto">
                            <a href="" class="underline">Upload Rule</a>
                        </div>
                        <form method="post"
                            action="{{ route('uploadfirstphoto', ['id' => $id, 'id_product' => $item->id]) }}"
                            accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <div class="w-1/3 my-auto">
                                <label
                                    class="boxup w-64 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                                    <span class="text-base leading-normal">Upload</span>
                                    <input type='file' name="images[]" id="images" accept="image/*" class="hidden imagein"
                                        multiple />
                                </label>
                                <div
                                    class="uploadsub hidden w-64 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mb-2 images-preview-div">
                    </div>
                </div>

                <script>
                    $(function() {
                        // Multiple images preview with JavaScript
                        var previewImages = function(input, imgPreviewPlaceholder) {
                            if (input.files) {
                                var filesAmount = input.files.length;
                                for (i = 0; i < filesAmount; i++) {
                                    var reader = new FileReader();
                                    reader.onload = function(event) {
                                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                            imgPreviewPlaceholder);
                                    }
                                    reader.readAsDataURL(input.files[i]);
                                }
                            }
                        };
                        $('.imagein').on('change', function() {
                            previewImages(this, 'div.images-preview-div');
                            $('.boxup').toggleClass('hidden');
                            $('.uploadsub').toggleClass('hidden');
                            $('.uploadsub').append('<button type="submit">UPLOAD YOUR PHOTOS</button>');

                        });
                    });
                </script>
            @elseif($item->album->count() != 0 )

                @if ($item->album[0]->{'Judul Album'} == null)
                    <div class="box-format-uf mt-12 flex">
                        <div class="w-1/4 my-auto text-center content-center items-center">
                            <h3 class="font-bold mx-auto">Your Photo</h3>
                            <div class="my-auto">
                                <form method="post"
                                    action="{{ route('uploadone', ['id' => $id, 'id_product' => $item->id]) }}"
                                    accept-charset="utf-8" enctype="multipart/form-data">
                                    @csrf
                                    <label
                                        class="w-40 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white mx-auto">
                                        <span class="text-base leading-normal mx-auto">Add Photo</span>
                                        <input type='file' name='imagesone' id="imagesone" accept="image/*"
                                            class="hidden" />
                                    </label>
                                </form>
                            </div>
                        </div>
                        <ul class="flex flex-wrap ml-6">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($item->album[0]->albumPhoto as $itemAlbum)
                                <li class="pr-4 mx-auto"><a href="{{ URL::to('/') }}/{{ $itemAlbum->photo }}">Photo
                                        {{ $i }}</a></li>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                    <script>
                        $("input[name=imagesone]").change(function() {
                            $(this).closest("form").submit();
                        });
                    </script>

                    <form method="post" action="{{ route('upjudul', ['id' => $id, 'id_product' => $item->id]) }}">
                        @csrf
                        <div class="box-format-uf mt-12 flex">
                            <div class="w-2/3 ">
                                <h2 class="font-bold mx-auto">Detail Album</h2>
                                <div class="">
                                    <div class="flex pt-4 pb-4">
                                        <h3 class="font-semibold w-1/3 my-auto">Judul Album (Cover)</h3>
                                        <div class="w-1/2">
                                            <input
                                                class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                                id="" type="text" placeholder="" name="judul">
                                        </div>
                                    </div>

                                    <div class="flex ">
                                        <h3 class="font-semibold w-1/3">Request</h3>
                                        <div class="w-1/2">
                                            <input id="" type="text"
                                                class="resize-none appearance-none border-2 border-gray-500 rounded w-full text-gray-700 p-3 leading-normal focus:outline-none focus:bg-white focus:border-blue-500"
                                                name="subject" placeholder="Write something.." style="height:200px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-1/3 my-auto">
                                <div class="items-center px-6 py-3">
                                    <button type="submit"
                                        class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
                                </div>
                            </div>

                        </div>
                    </form>
                @else
                    <div class="box-format-uf mt-12 flex">
                        <div class="w-1/4 my-auto text-center content-center items-center">
                            <h3 class="font-bold mx-auto">Your Photo</h3>
                        </div>
                        <ul class="flex flex-wrap ml-6">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($item->album[0]->albumPhoto as $itemAlbum)
                                <li class="pr-4 mx-auto"><a href="{{ URL::to('/') }}/{{ $itemAlbum->photo }}">Photo
                                        {{ $i }}</a></li>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </ul>
                    </div>

                    <div class="box-format-uf mt-12 flex">
                        <div class="w-2/3 ">
                            <h2 class="font-bold mx-auto">Detail Album</h2>
                            <form action="">
                                <div class="">
                                    <div class="flex pt-4 pb-4">
                                        <h3 class="font-semibold w-1/3 my-auto">Judul Album (Cover)</h3>
                                        <div class="w-1/2">
                                            <p>{{ $item->album[0]->{'Judul Album'} }}</p>
                                        </div>
                                    </div>

                                    <div class="flex ">
                                        <h3 class="font-semibold w-1/3">Request</h3>
                                        <div class="w-1/2">
                                            <p>{{ $item->album[0]->Request }}</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                @endif
            @endif
            @if (($item->album->count() != 0 && $item->album[0]->{'Judul Album'} != null && $item->album[0]->{'Preview'} == null && $pesanan[0]->status < 3) || ($item->album->count() != 0 && $item->album[0]->{'Judul Album'} != null && count($revisi) != 0 && $pesanan[0]->status < 3))

                <div class="text-center mb-12">
                    <p class="sec-title-u mt-12">Waiting for the preview <br> it may takes 2-3 days</p>
                </div>
            @endif
            @if ($pesanan[0]->status >= 3)

                <div class="box-format-uf">
                    <div class="flex">
                        <div class="w-1/2 text-left my-auto ">
                            <p class="font-semibold">Your Album’s Preview is Here !</p>
                        </div>
                        <div class="w-1/2">
                            <label
                                class="w-48 flex flex-col items-center mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                                <span class="text-base leading-normal mx-auto"><a
                                        href="{{ URL::to('/') }}/{{ $item->album[0]->Preview }}">
                                        See Preview</a></span>
                                <input type='' class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>
            @endif
            @if ($item->album->count() != 0 && $item->album[0]->{'Judul Album'} != null && $item->album[0]->{'Preview'} != null && count($revisi) == 0 && $pesanan[0]->status < 3)
                <div class="text-center mb-12">
                    <p class="sec-title-u mt-12"></p>
                </div>
                <div class="box-format-uf">
                    <div class="flex">
                        <div class="w-1/2 text-left my-auto ">
                            <p class="font-semibold">Your Album’s Preview is Here !</p>
                        </div>
                        <div class="w-1/2">
                            <label
                                class="w-48 flex flex-col items-center mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                                <span class="text-base leading-normal mx-auto"><a
                                        href="{{ URL::to('/') }}/{{ $item->album[0]->Preview }}">
                                        See Preview</a></span>
                                <input type='' class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <form method="post" action="{{ route('revisi', ['id' => $id, 'id_product' => $item->id]) }}"
                    class="box-format-uf mt-12 flex">
                    @csrf
                    @php
                        $i = 1;
                    @endphp
                    <div class="w-2/3 ">
                        <h2 class="font-bold mx-auto">Revision</h2>

                        <div class="mt-4 mb-4 flex">
                            <h3 class="font-semibold w-1/3">Revision Detail</h3>
                            <div class="w-2/3">
                                <div class="revisiArea">
                                    <div class="flex mb-4">
                                        <span class="my-auto m-4 font-bold">{{ $i }}.</span>
                                        <input name="revisi[]"
                                            class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                            id="" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="flex mb-4">
                                    <a class="addrev underline cursor-pointer">Add More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        var i = 2
                        $(".addrev").on('click', function() {
                            $('.revisiArea').append('<div class="flex mb-4"><span class="my-auto m-4 font-bold">' + i +
                                '.</span><input name="revisi[]"class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"id="" type="text" placeholder=""></div>'
                            )
                            i++;
                        });
                    </script>

                    <div class="w-1/3 my-auto">
                        <div class="items-center px-6 py-3">
                            <button type="submit"
                                class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
                        </div>
                    </div>
                </form>
                <div class="box-format-uf mt-12">
                    <div class="flex">
                        <div class="w-1/2 my-auto ">
                            <p class="font-semibold">Print Your Album’s</p>
                        </div>
                        <div class="w-1/2">
                            <form method="post" action="{{route('updateStatus', $id)}}">
                                @csrf
                                <label
                                    class="w-48 flex flex-col mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                                    <button type="submit" class="text-base leading-normal mx-auto">Print</button>
                                    <input type='hidden' class="hidden" value=3 name="status" />
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

            @if ($pesanan[0]->status == 3)
                <div class="text-center mb-12">
                    <p class="sec-title-u mt-12">Your album is under working progress now.<br>It may takes 2-4 days.<br>We
                        will
                        let
                        you know, if it done.</p>
                </div>
            @else
                <div class="text-center mb-12">

                </div>
            @endif


            <div class="mb-12 flex items-center">
                <div class="mx-auto">
                    <button
                        class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-48 rounded-md text-white uppercase">Home</button>
                </div>
            </div>

        @endforeach

    </section>

@endsection
