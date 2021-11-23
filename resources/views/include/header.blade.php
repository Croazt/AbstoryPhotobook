<header>
    <nav class="bg-white">
        <div class="border-nav h-6 bg-utama w-full sm:block hidden"></div>
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-24">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden" id="burger">
                    <!-- Mobile menu button-->
                    <button type="button" id="burger"
                        class=" inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                                              Icon when menu is closed.
                                  
                                              Heroicon name: outline/menu
                                  
                                              Menu open: "hidden", Menu closed: "block"
                                            -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                                              Icon when menu is open.
                                  
                                              Heroicon name: outline/x
                                  
                                              Menu open: "block", Menu closed: "hidden"
                                            -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 h-6 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-14 w-auto" src="{{ asset('images/LogoAbstory.svg') }}"
                            alt="Workflow">
                        <img class="hidden lg:block h-14 w-auto" src="{{ asset('images/LogoAbstory.svg') }}"
                            alt="Workflow">
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="bg-utama text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Home</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium">How
                                To Order</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>

                            @guest
                                <a class="text-gray-300 hover:bg-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="text-gray-300 hover:bg-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @endguest
                        </div>
                    </div>
                </div>
                <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
                    rel="stylesheet" />
                <!-- Required font awesome -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

                <!-- Small -->
                <div class="md:block relative hidden flex h-6 w-36 p-none m-none flex-end ">
                    <input type="text" placeholder="Search"
                        class=" px-2 py-1 placeholder-gray-400 text-gray-600 relative bg-white rounded-l text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-24 " />
                    <button class="w-7 h-7 rounded-r bg-utama m-none"> <i class="fas fa-search text-white"></i></button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-1 sm:pr-0">

                    <!-- Profile dropdown -->
                    <div class="ml-1 relative ">
                        <center>

                            <div id="profile">
                                <button type="button"
                                    class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    @guest
                                        <img class="h-8 w-8 rounded-full"
                                            src="{{ asset('images/user_pic/anon/anon_pic.png') }}" alt="">

                                    @else
                                        <img class="h-8 w-8 rounded-full"
                                            src="{{ asset('images/user_pic/'.Auth::user()->pic) }}" alt="">
                                    @endguest
                                </button>
                            </div>
                        </center>
                        @guest

                        @else

                            <p class="text-utama">
                                <span>{{ explode(' ', trim(Auth::user()->name))[0] }}</span>
                            </p>
                        @endguest
                        <!--
                                              Dropdown menu, show/hide based on menu state.
                                  
                                              Entering: "transition ease-out duration-100"
                                                From: "transform opacity-0 scale-95"
                                                To: "transform opacity-100 scale-100"
                                              Leaving: "transition ease-in duration-75"
                                                From: "transform opacity-100 scale-100"
                                                To: "transform opacity-0 scale-95"
                                            -->
                        <div id="profile-menu"
                            class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            @guest
                                <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1">Login
                                </a>
                                <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1">Register
                                </a>
                            @else
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-0">Your Profile</a>
                                <a href="{{route('viewCart')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1">Cart</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-utama text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Home</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Products</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">How
                    To Order</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>

                @guest
                    <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline"
                        onclick="event.preventDefault();
                                                                                                                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest

            </div>
        </div>
    </nav>
</header>
