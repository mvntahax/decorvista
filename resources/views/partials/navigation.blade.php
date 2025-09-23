<header
    class="flex items-center justify-between whitespace-nowrap bg-[var(--midnight)] text-[var(--ivory)] px-4 sm:px-6 lg:px-8 py-4 shadow-md relative z-50">

    <!-- Left: Logo + Desktop Nav -->
    <div class="flex items-center gap-6 lg:gap-10">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center gap-2 shrink-0">
            <span class="material-symbols-outlined text-3xl">chair</span>
            <h1 class="text-2xl tracking-tight font-bold">DecorVista</h1>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-6">
            @php
                $navLink = 'relative text-base font-medium transition-colors hover:text-[var(--beige)] after:content-[\'\'] after:absolute after:-bottom-1 after:left-0 after:h-[2px] after:w-0 after:bg-[var(--beige)] after:transition-all hover:after:w-full';
              @endphp
            <a class="{{ $navLink }}" href="{{ route('index') }}">Home</a>
            <a class="{{ $navLink }}" href="{{ route('designs') }}">Designs</a>
            <a class="{{ $navLink }}" href="{{ route('products') }}">Products</a>
            <a class="{{ $navLink }}" href="{{ route('about-us') }}">About Us</a>
            <a class="{{ $navLink }}" href="{{ route('contact') }}">Contact</a>
        </nav>
    </div>

    <!-- Right: Search + Auth/Profile + Mobile Trigger -->
    <div class="flex flex-1 justify-end items-center gap-2 sm:gap-4">
        <!-- Desktop Search -->
        <form action="{{ route('products') }}" method="GET" class="hidden sm:block">
            <label class="relative block">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-[var(--slate-gray)]" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                        </path>
                    </svg>
                </span>
                <input type="text" name="search" value="{{ request('search') }}"
                    class="form-input w-full min-w-40 max-w-64 rounded-full bg-[var(--ivory)] text-[var(--charcoal)] h-10 placeholder:text-[var(--slate-gray)] pl-10 pr-4 text-base font-normal shadow-sm border border-[var(--light-gray)] focus:outline-none focus:ring-2 focus:ring-[var(--charcoal)] focus:border-[var(--charcoal)]"
                    placeholder="Search products..." autocomplete="off" />
            </label>
        </form>

        @guest
            <a href="{{ route('login') }}" class="flex items-center justify-center rounded-md h-10 px-5 
              bg-[var(--ivory)] text-[var(--charcoal)] hover:bg-[var(--beige)] 
              transition-all font-medium shadow-sm text-center">
                Sign In
            </a>
        @endguest

        @auth
            <!-- Profile -->
            <div class="relative" x-data>
                <button id="dv-profile-btn" type="button" aria-haspopup="menu" aria-expanded="false"
                    class="flex items-center justify-center rounded-full h-10 w-10 bg-[var(--ivory)] text-[var(--charcoal)] hover:bg-[var(--beige)] transition-all shadow-sm focus:outline-none">
                    <svg fill="currentColor" viewBox="0 0 256 256" class="h-5 w-5">
                        <path
                            d="M128,128a56,56,0,1,0-56-56A56,56,0,0,0,128,128Zm0,16c-35.35,0-96,17.67-96,53.33V216a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V197.33C224,161.67,163.35,144,128,144Z">
                        </path>
                    </svg>
                </button>

                <div id="dv-profile-menu" role="menu" aria-labelledby="dv-profile-btn"
                    class="hidden absolute right-0 mt-2 w-56 bg-[var(--ivory)] rounded-md shadow-lg ring-1 ring-[var(--light-gray)] ring-opacity-40 overflow-hidden">
                    <a href="{{ route('users.cart') }}"
                        class="flex items-center gap-2 px-4 py-3 text-sm text-[var(--charcoal)] hover:bg-[var(--beige)] hover:text-[var(--midnight)] transition">
                        <span class="material-symbols-outlined text-base">shopping_cart</span> My Cart
                    </a>
                    <a href="{{ route('users.saved-designs') }}"
                        class="flex items-center gap-2 px-4 py-3 text-sm text-[var(--charcoal)] hover:bg-[var(--beige)] hover:text-[var(--midnight)] transition">
                        <span class="material-symbols-outlined text-base">bookmark</span> Saved Designs
                    </a>
                    <a href="{{ route('users.consultations') }}"
                        class="flex items-center gap-2 px-4 py-3 text-sm text-[var(--charcoal)] hover:bg-[var(--beige)] hover:text-[var(--midnight)] transition">
                        <span class="material-symbols-outlined text-base">event</span> Consultations
                    </a>
                    <a href="{{ route('users.profile') }}"
                        class="flex items-center gap-2 px-4 py-3 text-sm text-[var(--charcoal)] hover:bg-[var(--beige)] hover:text-[var(--midnight)] transition">
                        <span class="material-symbols-outlined text-base">person</span> My Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 w-full px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition">
                            <span class="material-symbols-outlined text-base">logout</span> Log Out
                        </button>
                    </form>
                </div>
            </div>
        @endauth

        <!-- Mobile Menu Button -->
        <button id="dv-mobile-btn" class="md:hidden p-2 rounded hover:bg-white/10 focus:outline-none"
            aria-controls="dv-mobile-panel" aria-expanded="false">
            <span class="material-symbols-outlined text-3xl">menu</span>
            <span class="sr-only">Open menu</span>
        </button>
    </div>

    <!-- Mobile Backdrop -->
    <div id="dv-backdrop" class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden"></div>

    <!-- Mobile Panel -->
    <div id="dv-mobile-panel"
        class="fixed md:hidden top-0 right-0 h-full w-[88%] max-w-sm translate-x-full transition-transform duration-200 ease-out bg-[var(--midnight)] text-[var(--ivory)] shadow-2xl">
        <div class="flex items-center justify-between px-4 py-4 border-b border-white/10">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-2xl">chair</span>
                <span class="font-semibold">DecorVista</span>
            </div>
            <button id="dv-mobile-close" class="p-2 rounded hover:bg-white/10 focus:outline-none">
                <span class="material-symbols-outlined text-3xl">close</span>
                <span class="sr-only">Close menu</span>
            </button>
        </div>

        <!-- Mobile Search -->
        <div class="px-4 py-4 border-b border-white/10">
            <form action="{{ route('products') }}" method="GET" class="w-full">
                <label class="relative block">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-[var(--slate-gray)]" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                            </path>
                        </svg>
                    </span>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="form-input w-full rounded-full bg-[var(--ivory)] text-[var(--charcoal)] h-10 placeholder:text-[var(--slate-gray)] pl-10 pr-4 text-base font-normal shadow-sm border border-[var(--light-gray)] focus:outline-none focus:ring-2 focus:ring-[var(--charcoal)] focus:border-[var(--charcoal)]"
                        placeholder="Search products..." autocomplete="off" />
                </label>
            </form>
        </div>

        <!-- Mobile Links -->
        <nav class="px-2 py-2 space-y-1">
            <a href="{{ route('index') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">Home</a>
            <a href="{{ route('designs') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">Designs</a>
            <a href="{{ route('products') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">Products</a>
            <a href="{{ route('about-us') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">About Us</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">Contact</a>

            @guest
                <a href="{{ route('login') }}"
                    class="block px-4 py-3 text-base bg-[var(--ivory)] text-[var(--charcoal)] rounded hover:bg-[var(--beige)] mt-2">Sign
                    In</a>
            @endguest

            @auth
                <div class="border-t border-white/10 mt-2 pt-2">
                    <a href="{{ route('users.cart') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">My
                        Cart</a>
                    <a href="{{ route('users.saved-designs') }}"
                        class="block px-4 py-3 text-base hover:bg-white/10 rounded">Saved Designs</a>
                    <a href="{{ route('users.consultations') }}"
                        class="block px-4 py-3 text-base hover:bg-white/10 rounded">Consultations</a>
                    <a href="{{ route('users.profile') }}" class="block px-4 py-3 text-base hover:bg-white/10 rounded">My
                        Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="px-2 py-2">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-2 py-3 text-base text-red-500 hover:bg-red-50/10 rounded">Log
                            Out</button>
                    </form>
                </div>
            @endauth
        </nav>
    </div>
</header>