<footer class="footer bg-white relative pt-1 border-b-2 border-white bg-utama">
    <div class="container mx-auto px-6 ">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <img src="{{ asset('images/Logo.png') }}" class="center w-48 h-48 sm:w-24 sm:h-24" alt="">
                    <span class="font-bold text-white uppercase mb-2">Contact Info</span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">Phone
                            &emsp;&emsp;: 0812-3334-1392</a></span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">Email&emsp;:
                            abstoryku@gmail.com</a></span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">Location :
                            Malang, Indonesia</a></span>
                    <span class="font-bold text-white uppercase mb-2">Media Social</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-white uppercase mb-2">Pages</span>
                    <span class="my-2"><a href="#"
                            class="text-white  text-md hover:text-blue-500">Home</a></span>
                    <span class="my-2"><a href="#"
                            class="text-white  text-md hover:text-blue-500">Products</a></span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">How To
                            order</a></span>
                    <span class="my-2"><a href="#"
                            class="text-white  text-md hover:text-blue-500">Contact</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-white uppercase mt-4 md:mt-0 mb-2">Categories</span>
                    <span class="my-2"><a href="#"
                            class="text-white text-md hover:text-blue-500">Magazine</a></span>
                    <span class="my-2"><a href="#"
                            class="text-white  text-md hover:text-blue-500">Premium</a></span>
                    <span class="my-2"><a href="#"
                            class="text-white text-md hover:text-blue-500">Luxury</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-white uppercase mt-4 md:mt-0 mb-2">Costumer Care</span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">My
                            Account</a></span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">Order
                            History</a></span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-blue-500">Order
                            Tracking</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-white font-bold mb-2">
                    ©Abstory - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        $('#profile').on('click', function(e) {
            $('#profile-menu').toggleClass("hidden"); //you can list several class names 
            e.preventDefault();
        });


        $('#burger').on('click', function(e) {
            $('#mobile-menu').toggleClass("hidden"); //you can list several class names 
            e.preventDefault();
        });
    })
</script>

