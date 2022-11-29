<nav x-data="{ open: false }" class="sticky top-2 py-2 mx-4 bg-white border border-black border-opacity-5 md:rounded-full rounded-xl shadow-md">
    <!-- Primary Navigation Menu -->
    <div class=" flex justify-between items-center md:gap-6 gap-0">

        <!-- LOGO -->
        <a href="/fardelliditalia" class="">
            <img src="/img/logo2.png" alt="" class="shadow-lg aspect-square ml-3 md:w-12 w-8 md:h-12 h-8 border border-white hover:border-black rounded-full">
        </a>

        <!-- PAGINE -->
        <a href="/" class="@if (Request::is('/')) {{'hidden'}} @endif md:px-4 px-2 md:text-lg text-sm tracking-wide border border-slate-300 rounded-full p-1 hover:border-violet-300 hover:bg-violet-100 shadow-lg">HomE</a>
        <a href="/manifesto" class="@if (Request::is('manifesto')) {{'hidden'}} @endif md:px-4 px-2 md:text-lg text-sm tracking-wide border border-slate-300 rounded-full p-1 hover:border-violet-300 hover:bg-violet-100 shadow-lg">ManifestO</a>
        <a href="/posts" class="@if (Request::is('posts')) {{ 'hidden' }} @endif md:px-4 px-2 md:text-lg text-sm tracking-wide border border-slate-300 rounded-full p-1 hover:border-violet-300 hover:bg-violet-100 shadow-lg">PosTs</a>

        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ml-6 mr-4">
            <x-dropdown width="">
                <x-slot name="trigger">
                    <button class="flex items-center md:px-4 px-2 md:text-lg text-sm tracking-wide border border-slate-300 rounded-full p-1 hover:border-violet-300 hover:bg-violet-100 shadow-lg focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                    @auth
                        <div class="invisible sm:visible">{{ Auth::user()->name }}</div>
                    @endauth

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
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

        <!-- Hamburger -->
        <div class="mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>