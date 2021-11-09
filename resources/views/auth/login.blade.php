<html lang="en">

@include('template')

<body>
    @include('include/header')
<div class="z-0 flex flex-col items-center text-utama h-wrap pt-24 pb-24">
    <div class="w-full mb-20">
        <p class="text-center font-bold text-7xl">Login</p>
    </div>
    <div class="w-192">
        <form action="">
        <center>
            <div class=" flex flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                <p class="mb-4 text-left">Please login using account detail below</p>
                <input type="text" placeholder="Email Address" name="email"
                    class=" px-2 py-1 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full" />
            </div>
            <div class=" flex-col h-28 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                <input type="password" placeholder="Password" name="password"
                    class=" px-2 py-1 mb-4 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full" />
                    <p class="mb-4 text-left">Forgot your password? <a href="">Click Here</a></p>
            </div>
                <button type="submit"
                    class="big-button mb-4 mt-6">Login</button>
                    <p>Don’t have an Account? Create account</p>
            </center>

        </form>
    </div>
</div>
@include('include/footer')
</body>

</html>

