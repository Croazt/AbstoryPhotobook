@extends('template')

@section('content')
    <div class="z-0 flex flex-col items-center text-utama h-wrap pt-24 pb-24">
        <div class="w-full mb-20">
            <p class="text-center font-bold text-7xl">Login</p>
        </div>
        <div class="w-192">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <center>
                    <div class=" flex flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                        <p class="mb-4 text-left">Please login using account detail below</p>
                        <input type="text" placeholder="Email Address" name="email"
                            class="border-gray-400 @error('email') border-red-500 @enderror textarea" />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class=" flex-col h-26 md:w-full sm:w-128 p-none m-none flex-end mb-4 w-96">
                        <input type="password" placeholder="Password" name="password"
                            class="border-gray-400 @error('password') border-red-500 @enderror textarea" />
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs italic mb-4">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="flex justify-between mb-4 mt-2">
                        <div class="">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </div>
                        <div class="">
                            <p class="">Forgot your password? <a class="text-blue-500 hover:text-blue-700"
                                    href="{{ route('password.request') }}">Click
                                    Here</a></p>
                            <div class="">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="big-button mb-4 mt-6">Login</button>
                    <p>
                        Don’t have an Account? <a href="{{ route('register') }}"
                            class="text-blue-500 hover:text-blue-700">Create account
                        </a>
                    </p>
                </center>
            </form>
        </div>
    </div>
@endsection
{{-- <html lang="en">

<body>
    @include('include/header')
@include('include/footer')
</body>

</html> --}}
