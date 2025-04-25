<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Divider hitam tebal dan lebih dekat */
        .divider {
            border-top: 2px solid #000;
            margin-top: 10px; /* Menurunkan jarak divider */
            margin-bottom: 10px; /* Menurunkan jarak divider */
        }

        /* Styling nav-link agar tidak ada garis bawah atau highlight biru */
        .x-nav-link {
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
            text-decoration: none !important;
            font-size: 1rem; /* Ukuran font lebih kecil */
            font-weight: bold; /* Menjadikan semua teks bold */
        }

        .x-nav-link.active,
        .x-nav-link:hover,
        .x-nav-link:focus {
            border: none !important;
            box-shadow: none !important;
            text-decoration: none !important;
        }

        /* Agar teks di tengah */
        .x-nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Mengatur ukuran logo sesuai permintaan */
        .logo {
            height: 65px; /* Meningkatkan ukuran logo sedikit */
            width: auto;
        }
    </style>
</head>
<body class="font-sans antialiased" style="background-color: #E4E8D6;">
    <div class="min-h-screen" style="background-color: #E4E8D6;">
        <!-- Navbar -->
        <nav x-data="{ open: false }" class="border-b border-gray-200" style="background-color: #E4E8D6;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                            </a>
                        </div>
                    </div>

                    <!-- Navigation Links (diubah ke tengah) -->
                    <div class="flex-1 flex justify-center space-x-8">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="x-nav-link" style="color: #000;">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="x-nav-link" style="color: #000;">
                            {{ __('Daftar Usaha') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="x-nav-link" style="color: #000;">
                            {{ __('Riwayat Transaksi') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="x-nav-link" style="color: #000;">
                            {{ __('Distribusi Dana Sosial') }}
                        </x-nav-link>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-[#42563D] bg-[#E4E8D6] hover:text-[#282323] focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')" class="text-[#42563D]">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-[#42563D]">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Divider Hitam -->
        <div class="divider"></div>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
