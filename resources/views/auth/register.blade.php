@extends('template')

@section('content')
    <div class="z-0 flex flex-col items-center text-utama h-wrap pt-24 pb-24">
        <div class="w-full mb-20">
            <p class="text-center font-bold text-7xl">Register</p>
        </div>
        <div class="w-192">
            <form method="POST"
            action="{{ route('register') }}">
            @csrf
                <center>
                    <div class="flex flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                        <p class="mb-4 text-left">Please fill the form to register on this website</p>
                        <input required type="text" placeholder="Name" name="name" class="border-gray-400 @error('name') border-red-500 @enderror textarea " />
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="textarea-col">
                        <input required type="email" placeholder="Email Address" name="email" class="border-gray-400 @error('email') border-red-500 @enderror textarea " />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
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
                    @error('province')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    @error('city')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="district" name="district" id="district" class=" textarea-2">
                            <option value="">== Select District ==</option>
                        </select>
                        <select placeholder="village" name="village" id='village' class=" textarea-2">
                            <option value="">== Select Sub District ==</option>
                        </select>
                    </div>
                    @error('district')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    @error('village')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class=" textarea-col">
                        <input required type="text" placeholder="Address" name="address" class="border-gray-400 @error('address') border-red-500 @enderror textarea " />
                    </div>
                    @error('address')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class=" textarea-col">
                        <input required type="phone" placeholder="Phone" name="phone" class="border-gray-400 @error('phone') border-red-500 @enderror textarea " />
                    </div>
                    @error('phone')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class=" textarea-col">
                        <input required type="password" placeholder="Password" name="password" class="border-gray-400 @error('password') border-red-500 @enderror textarea " />
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="flex-col h-16  mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input required type="password" placeholder="Confirm Password" name="password_confirmation"
                            class="border-gray-400 @error('password') border-red-500 @enderror textarea " />
                    </div>
                    <input type="hidden" name="role" id="role" value="user">
                    <input type="hidden" name="pic" id="pic" value="anon/anon_pic.png">
                    <button type="submit" class="big-button mb-4 mt-6  ">Register</button>
                    <a href="{{ 'Login' }}">
                        <p>Already have an account? Login</p>
                    </a>
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

    {{-- <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main> --}}
@endsection
{{-- <html lang="en"> --}}

{{-- @include('template') --}}
{{-- <body>
    @include('include/header')
    <div class="z-0 flex flex-col items-center text-utama h-wrap pt-24 pb-24">
        <div class="w-full mb-20">
            <p class="text-center font-bold text-7xl">Register</p>
        </div>
        <div class="w-192">
            <form action="">
                <center>
                    <div class="flex flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                        <p class="mb-4 text-left">Please fill the form to register on this website</p>
                        <input type="text" placeholder="Name" name="Name" class="textarea" />
                    </div>
                    <div class="textarea-col">
                        <input type="email" placeholder="Email Address" name="email"
                            class=" textarea" />
                    </div>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="country" name="province" id="province"
                            class=" textarea-2">
                            <option value="">== Select Province ==</option>
                            @foreach ($provinces as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        <select placeholder="City" name="City" id='city'
                            class=" textarea-2">
                            <option value="">== Select City ==</option>
                        </select>
                    </div>
                    <div class=" flex h-16 mb-4 md:w-full sm:w-128 p-none m-none justify-between w-96">
                        <select placeholder="district" name="district" id="district"
                            class=" textarea-2">
                            <option value="">== Select District ==</option>
                        </select>
                        <select placeholder="village" name="village" id='village'
                            class=" textarea-2">
                            <option value="">== Select Sub District ==</option>
                        </select>
                    </div>
                    <div class=" textarea-col">
                        <input type="text" placeholder="Address" name="address" class="textarea" />
                    </div>
                    <div class=" textarea-col">
                        <input type="phone" placeholder="Phone" name="Phone"
                            class=" textarea" />
                    </div>
                    <div class=" textarea-col">
                        <input type="phone" placeholder="Password" name="password"
                            class=" textarea" />
                    </div>
                    <div class="flex-col h-16  mb-4 md:w-full sm:w-128 p-none m-none flex-end  w-96">
                        <input type="password" placeholder="Confirm Password" name="cpassword" class="textarea" />
                    </div>
                    <button type="submit"
                        class="big-button mb-4 mt-6  ">Register</button>
                    <a href="{{'login'}}"><p>Already have an account? Login</p></a>
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
</body> --}}
