<?php
    use Illuminate\Support\Facades\Auth;
?>

<nav x-data="{ open: false }" class="{{ $class }} min-w-screen bg-gray ">
    <!-- Primary Navigation Menu -->
    <div class="shadow-sm shadow-not-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Hamburger -->
                <div class="-me-2 flex items-center">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md hover:cursor-pointer border-2 border-transparent hover:border-not-black focus:outline-none  transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Settings Dropdown -->
                {{-- <div class="hidden sm:flex sm:items-center sm:ms-6"> --}}
                <div class="flex items-center ms-6">
                    <x-menu.dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center p-3 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none hover:cursor-pointer border-2 border-transparent hover:border-not-black transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name ?? "guest" }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-menu.dropdown.link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-menu.dropdown.link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-menu.dropdown.link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-menu.dropdown.link>
                            </form>
                        </x-slot>
                    </x-menu.dropdown>
                </div>
            </div>
        </div>

        <x-nav.search-bar :class="'block md:hidden'" />
    </div>

    <x-menu.hamburger open="open">
        <div class="space-y-1">
            <x-button.responsiveNavLink :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-button.responsiveNavLink>
        </div>

        <!-- Responsive Settings Options -->
        <div class="border-t border-not-black">
            <div class="px-4">
                <div class="font-medium text-base text-not-black">{{ Auth::user()->name ?? "guest" }}</div>
                <div class="font-medium text-sm text-not-dark">{{ Auth::user()->email ?? "email" }}</div>
            </div>

            <div>
                <x-button.responsiveNavLink :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-button.responsiveNavLink>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-button.responsiveNavLink :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-button.responsiveNavLink>
                </form>
            </div>
        </div>
    </x-menu.hamburger>

    {{-- <!-- Responsive Navigation Menu -->
    <div :class="open ? 'right-0': 'right-[100%]'" class="fixed z-[-1] min-h-screen min-w-screen block bg-not-white border-b border-not-black transition-[right] duration-150 ease-in-out">
        <div class="space-y-1">
            <x-button.responsiveNavLink :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-button.responsiveNavLink>
        </div>

        <!-- Responsive Settings Options -->
        <div class="border-t border-not-black">
            <div class="px-4">
                <div class="font-medium text-base text-not-black">{{ Auth::user()->name ?? "guest" }}</div>
                <div class="font-medium text-sm text-not-dark">{{ Auth::user()->email ?? "email" }}</div>
            </div>

            <div>
                <x-button.responsiveNavLink :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-button.responsiveNavLink>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-button.responsiveNavLink :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-button.responsiveNavLink>
                </form>
            </div>
        </div>
    </div> --}}
</nav>