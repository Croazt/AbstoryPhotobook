<html lang="en">

@include('template')

<body>

    @include('include/header')
    <div class="z-0 flex flex-col items-center text-utama h-wrap pt-24 pb-24">
        <div class="w-full mb-20">
            <p class="text-center font-bold text-7xl">Register</p>
        </div>
        <div class="w-192">
            <form action="">
                <center>
                    <div class=" flex flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                        <p class="mb-4 text-left">Please fill the form to register on this website</p>
                        <input type="text" placeholder="Name" name="Name" class=".textarea" />
                    </div>
                    <div class="flex-col h-16 mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="email" placeholder="Email Address" name="email"
                            class=" px-2 py-1  h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full" />
                    </div>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="country" name="province" id="province"
                            class=" px-2 py-1 mb-4 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-9/20">
                            <option value="">== Select Province ==</option>
                            @foreach ($provinces as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        <select placeholder="City" name="City" id='city'
                            class=" px-2 py-1 mb-4 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-9/20">
                            <option value="">== Select City ==</option>
                        </select>
                    </div>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="district" name="district" id="district"
                            class=" px-2 py-1 mb-4 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-9/20">
                            <option value="">== Select District ==</option>
                        </select>
                        <select placeholder="village" name="village" id='village'
                            class=" px-2 py-1 mb-4 h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-9/20">
                            <option value="">== Select Sub District ==</option>
                        </select>
                    </div>
                    <div class=" flex-col h-16 mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="text" placeholder="Address" name="address" class=" " />
                    </div>
                    <div class=" flex-col h-16 mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="phone" placeholder="Phone" name="Phone"
                            class=" px-2 py-1  h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full" />
                    </div>
                    <div class=" flex-col h-16 mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="phone" placeholder="Password" name="password"
                            class=" px-2 py-1  h-16 placeholder-gray-400 text-gray-600 relative bg-white  rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full" />
                    </div>
                    <div class=" flex-col h-16  mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="password" placeholder="Confirm Password" name="cpassword" class=".textarea" />
                    </div>
                    <button type="submit"
                        class="h-16 mb-4 mt-6 rounded bg-utama text-white text-lg font-bold outline-none f w-64">Register</button>
                    <p>Already have an account? Login</p>
                </center>

            </form>


        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', function() {

            $(function() {
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
    @include('include/footer')
</body>

</html>
