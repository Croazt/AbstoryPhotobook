@extends('template')
@section('content')

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="sec-title">Creating Your Photobook</h1>
    </div>

    <div class="flex space-x-5 ">
        <div id="" class="cursor-pointer">Mag 20x30 Landscape 1</div>
        <div id="" class="cursor-pointer">Mag 20x30 Landscape 2</div>
        <div id="" class="cursor-pointer">Tambah Sheet Mag</div>
    </div>

    <hr class="my-4 border-solid mb-12">

    <div class="box-format-uf">
        <div class="flex">
            <div class="w-1/3 text-left my-auto ">
                <p class="font-bold">Upload your photo!</p>
            </div>
            <div class="w-1/3 my-auto">
                <a href="" class="underline">Upload Rule</a>
            </div>
            <div class="w-1/3 my-auto">
                <label class="w-64 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                    <span class="text-base leading-normal">Upload</span>
                    <input type='file' class="hidden" multiple/>
                </label>
            </div>
        </div>
    </div>

    <div class="box-format-uf mt-12">
        <div class="w-1/4 my-auto text-center content-center items-center">
            <h3 class="font-bold mx-auto">Your Photo</h3>
            <div class="my-auto">
                <label class="w-40 flex flex-col items-center px-4 py-4 bg-gray-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white mx-auto">
                    <span class="text-base leading-normal mx-auto">Add Photo</span>
                    <input type='file' class="hidden"/>
                </label>
            </div>
        </div>
    </div>
    
    <div class="box-format-uf mt-12 flex">
        <div class="w-2/3 ">
            <h2 class="font-bold mx-auto">Detail Album</h2>

            <div class="">
                <div class="flex pt-4 pb-4">
                    <h3 class="font-semibold w-1/3 my-auto">Judul Album (Cover)</h3>
                    <div class="w-1/2">
                        <input class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="" type="text" placeholder="">
                    </div>
                </div>

                <div class="flex ">
                    <h3 class="font-semibold w-1/3">Request</h3>
                    <div class="w-1/2">
                        <textarea id="" class="resize-none appearance-none border-2 border-gray-500 rounded w-full text-gray-700 p-3 leading-normal focus:outline-none focus:bg-white focus:border-blue-500" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <input class="hidden" id="" type="text" placeholder="">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-1/3 my-auto">
            <div class="items-center px-6 py-3">
                <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
            </div>
        </div>
    
    </div>

    <div class="text-center mb-12">
        <p class="sec-title-u mt-12">Waiting for the preview <br> it may takes 2-3 days</p>
    </div>
    
    <div class="box-format-uf">
        <div class="flex">
            <div class="w-1/2 text-left my-auto ">
                <p class="font-semibold">Your Album’s Preview is Here !</p>
            </div>
            <div class="w-1/2">
                <label class="w-48 flex flex-col items-center mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                    <span class="text-base leading-normal mx-auto">See Preview</span>
                    <input type='' class="hidden"/>
                </label>
            </div>
        </div>
    </div>

    <div class="box-format-uf mt-12 flex">
        <div class="w-2/3 ">
            <h2 class="font-bold mx-auto">Revision</h2>

                <div class="mt-4 mb-4 flex">
                    <h3 class="font-semibold w-1/3">Revision Detail</h3>

                    <form class="w-2/3">
                        <div class="flex mb-4">
                            <span class="my-auto m-4 font-bold">1.</span>
                            <input class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="" type="text" placeholder="">
                        </div>
                        <div class="flex mb-4">
                            <span class="my-auto m-4 font-bold">2.</span>
                            <input class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="" type="text" placeholder="">
                        </div>
                        <div class="flex mb-4">
                            <span class="my-auto m-4 font-bold">3.</span>
                            <input class="appearance-none border-2 border-gray-500 rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="" type="text" placeholder="">
                        </div>
                        <div class="flex mb-4">
                            <a href="" class="underline">Add More</a>
                        </div>
                    </form>

                </div>
        </div>

        <div class="w-1/3 my-auto">
            <div class="items-center px-6 py-3">
                <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-full rounded-md text-white uppercase ">Confirm</button>
            </div>
        </div>
    </div>

    <div class="box-format-uf mt-12">
        <div class="flex">
            <div class="w-1/2 my-auto ">
                <p class="font-semibold">Your New Album’s Preview is Here !</p>
            </div>
            <div class="w-1/2">
                <label class="w-48 flex flex-col mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                    <span class="text-base leading-normal mx-auto">See Preview</span>
                    <input type='' class="hidden"/>
                </label>
            </div>
        </div>
    </div>

    <div class="box-format-uf mt-12">
        <div class="flex">
            <div class="w-1/2 my-auto ">
                <p class="font-semibold">Print Your Album’s</p>
            </div>
            <div class="w-1/2">
                <label class="w-48 flex flex-col mx-auto px-4 py-2 bg-gray-500 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-gray-500 hover:text-white">
                    <span class="text-base leading-normal mx-auto">Print</span>
                    <input type='' class="hidden"/>
                </label>
            </div>
        </div>
    </div>

    <div class="text-center mb-12">
        <p class="sec-title-u mt-12">Your album is under working progress now.<br>It may takes 2-4 days.<br>We will let you know, if it done.</p>
    </div>

    <div class="mb-12 flex items-center">
        <div class="mx-auto">
            <button class="bg-gray-500 font-semibold hover:bg-gray-600 py-3 text-sm w-48 rounded-md text-white uppercase">Home</button>
        </div>
    </div>
        

</section>

@endsection