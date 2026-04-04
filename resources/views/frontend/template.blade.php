<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
    <!--For Development Env--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'Assets/css/main.css'}}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body x-data="{ open: false }">
    <div>
        <nav id="topNav" class="navbar fixed-top bg-success top-navbar">
            <div class="container-fluid">
                <a id="MenuBar" @click="NavOpenClose" class="icon-nav mx-0 my-1 h5">
                    <i class="fa text-white fa-bars"></i>
                </a>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

        </nav>

        <div id="sideNav" class="side-nav-open">
            <div class="side-nav-top text-center">
                <img alt="" class="side-nav-logo" src="./Assets/img/logo.svg" />
            </div>

            <a href="{{ route('dashboard') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-tachometer-alt text-green"></i></span>
                <span class="side-bar-item-caption">Dashboard</span>
            </a>

            <a href="{{ route('category') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-th-list text-green"></i></span>
                <span class="side-bar-item-caption">Category</span>
            </a>

            <a href="{{ route('customer') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-users text-green"></i></span>
                <span class="side-bar-item-caption">Customer</span>
            </a>

            <a href="{{ route('product') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-box text-green"></i></span>
                <span class="side-bar-item-caption">Product</span>
            </a>

            <a href="{{ route('createSale') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-shopping-cart text-green"></i></span>
                <span class="side-bar-item-caption">Create Sale</span>
            </a>

            <a href="{{ route('invoice') }}" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-file-invoice-dollar text-green"></i></span>
                <span class="side-bar-item-caption">Invoice</span>
            </a>

            <a href="profileForm.html" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-user-circle text-green"></i></span>
                <span class="side-bar-item-caption">Profile</span>
            </a>

            <a href="" class="side-bar-item">
                <span class="side-bar-item-icon"><i class="fa fa-sign-out-alt text-green"></i></span>
                <span class="side-bar-item-caption">Logout</span>
            </a>

        </div>

        @yield('main_content')


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>