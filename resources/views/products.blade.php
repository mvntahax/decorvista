@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <!-- Success Notification -->
            <div class="fixed bottom-6 right-6 z-50 space-y-4">
                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform transition ease-out duration-300"
                        x-transition:enter-start="translate-y-4 opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transform transition ease-in duration-300"
                        x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-4 opacity-0"
                        x-init="setTimeout(() => show = false, 4000)"
                        class="px-4 py-3 font-medium rounded-md bg-[var(--charcoal)] text-[var(--ivory)] shadow-md">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="flex flex-col lg:flex-row gap-12">
                <aside class="lg:w-1/4">
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-semibold text-[var(--charcoal)] mb-4">Categories</h3>
                            <ul class="space-y-2 text-[var(--slate-gray)]">
                                <li>
                                    <a class="hover:text-[var(--charcoal)] font-medium"
                                        href="{{ route('products') }}">All</a>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <a class="hover:text-[var(--charcoal)] font-medium"
                                            href="{{ route('products.byCategory', $category->slug) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="border-t border-[var(--light-gray)] pt-8">
                            <h3 class="text-xl font-semibold text-[var(--charcoal)] mb-4">Filter By</h3>
                            <div class="space-y-6">
                                <form action="{{ route('products') }}" method="GET" class="space-y-6">
                                    <!-- Sort By -->
                                    <div>
                                        <label class="block text-base font-medium text-[var(--slate-gray)] mb-2"
                                            for="brand">Sort By</label>
                                        <select name="sort" id="brand"
                                            class="form-select w-full rounded-md border-[var(--light-gray)]">
                                            <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest
                                            </option>
                                            <option value="price_low_high" {{ request('sort') == 'price_low_high' ? 'selected' : '' }}>Price: Low to High</option>
                                            <option value="price_high_low" {{ request('sort') == 'price_high_low' ? 'selected' : '' }}>Price: High to Low</option>
                                        </select>
                                    </div>

                                    <!-- Price Range -->
                                    <div>
                                        <label class="block text-base font-medium text-[var(--slate-gray)] mb-2">Price
                                            Range</label>
                                        <div class="flex items-center gap-2">
                                            <input value="{{ request('min_price') }}" type="number" name="min_price"
                                                placeholder="Min"
                                                class="form-input w-1/2 rounded-md border-[var(--light-gray)]">
                                            <span>-</span>
                                            <input value="{{ request('max_price') }}" type="number" name="max_price"
                                                placeholder="Max"
                                                class="form-input w-1/2 rounded-md border-[var(--light-gray)]">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="w-full bg-[var(--charcoal)] text-[var(--white)] py-2 px-4 rounded-md hover:bg-[var(--hover-gray)] transition-colors font-semibold">
                                        Apply Filters
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="lg:w-3/4">
                    <form action="{{ route('products') }}" method="GET" class="mb-6">
                        <label class="relative block w-full sm:w-1/2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-[var(--slate-gray)]" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}"
                                class="form-input w-full rounded-full bg-[var(--ivory)] 
                        text-[var(--charcoal)] h-10 placeholder:text-[var(--slate-gray)] pl-10 pr-4 text-base font-normal shadow-sm border border-[var(--light-gray)] focus:outline-none focus:ring-2 focus:ring-[var(--charcoal)] focus:border-[var(--charcoal)]"
                                placeholder="Search products..." />
                        </label>
                    </form>

                    @if($search)
                        <p class="text-sm text-gray-600 mb-4">Showing results for: <strong>{{ $search }}</strong></p>
                    @endif
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($products as $product)
                                        <div class="group relative flex flex-col">
                                            <div class="aspect-square group relative overflow-hidden rounded-lg">
                                                <div
                                                    class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-110">
                                                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                                                </div>
                                                <!-- Top Badges/Buttons -->
                                                <div class="absolute top-2 right-2 flex gap-2">
                                                    <!-- Favorite Button -->
                                                    <form action="{{ route('users.cart.store', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="w-8 h-8 rounded-full flex items-center justify-center transition-all
                                                                                                                                                                                        {{ in_array($product->id, $cartItems)
                            ? 'bg-[var(--charcoal)] text-[var(--white)] scale-110 shadow-md'
                            : 'bg-white/80 text-gray-600 hover:text-[var(--charcoal)] hover:scale-110 hover:shadow-md' }}">
                                                            <span class="material-symbols-outlined text-base">shopping_cart</span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                            <h3 class="mt-4 text-lg font-medium text-[var(--charcoal)]">{{ $product->name }}</h3>
                                            <p class="mt-1 text-base text-[var(--slate-gray)]">${{ $product->price }}</p>
                                        </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-center mt-12">
                        {{ $products->onEachSide(1)->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection