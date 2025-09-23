@extends('layouts.app')

@section('content')
    <main class="flex flex-1 justify-center mt-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full mx-auto max-w-7xl">

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

            <!-- Tabs Navigation -->
            <div class="border-b border-[var(--light-gray)]">
                <nav aria-label="Tabs" class="-mb-px flex space-x-6 overflow-x-auto">
                    {{-- "All" tab --}}
                    <a href="{{ route('designs') }}" class="{{ request()->routeIs('designs')
        ? 'border-[var(--midnight)] text-[var(--charcoal)] border-b-2'
        : 'border-transparent text-[var(--slate-gray)] hover:text-[var(--charcoal)] hover:border-[var(--light-gray)] border-b-2' }}
                                    whitespace-nowrap py-4 px-2 text-sm font-medium">
                        All
                    </a>

                    {{-- Categories --}}
                    @foreach ($categories as $category)
                                <a href="{{ route('designs.byCategory', $category->slug) }}" class="{{ request()->is('designs/' . $category->slug)
                        ? 'border-[var(--midnight)] text-[var(--charcoal)] border-b-2'
                        : 'border-transparent text-[var(--slate-gray)] hover:text-[var(--charcoal)] hover:border-[var(--light-gray)] border-b-2' }}
                                                                whitespace-nowrap py-4 px-2 text-sm font-medium">
                                    {{ $category->name }}
                                </a>
                    @endforeach
                </nav>
            </div>

            <!-- Designs Grid -->
            @if ($designs->count() > 0)
                <section class="py-10" id="projects">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($designs as $design)
                                <div
                                    class="flex flex-col bg-[var(--beige)] rounded-md shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-300/50">

                                    <!-- Image Section -->
                                    <div class="relative">
                                        <div class="w-full h-56 rounded-t-lg overflow-hidden">
                                            <img src="{{ asset('images/' . $design->image) }}" alt="{{ $design->title }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <!-- Gradient Overlay -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-[#27272A]/30 via-[#27272A]/10 to-transparent rounded-t-lg">
                                        </div>

                                        <!-- Top Buttons -->
                                        <div class="absolute top-2 right-2 flex gap-2">
                                            <!-- Favorite Toggle -->
                                            <form action="{{ route('users.saved-designs.store', $design->id) }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="w-8 h-8 rounded-full flex items-center justify-center transition-all
                                                                                {{ in_array($design->id, $savedDesigns)
                            ? 'bg-[var(--charcoal)] text-[var(--white)] scale-110 shadow-md'
                            : 'bg-white/80 text-gray-600 hover:text-[var(--charcoal)] hover:scale-110 hover:shadow-md' }}">
                                                    <span class="material-symbols-outlined text-base">favorite</span>
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Category Badge -->
                                        <span class="absolute top-2 left-2 bg-black/70 text-white text-xs px-2 py-1 rounded-md">
                                            {{ $design->category->name }}
                                        </span>
                                    </div>

                                    <!-- Content Section -->
                                    <div class="p-6 flex-grow space-y-2">
                                        <h3 class="text-lg font-bold text-[var(--charcoal)]">{{ $design->title }}</h3>
                                        <p class="text-sm text-[var(--slate-gray)] line-clamp-3">
                                            {{ $design->description }}
                                        </p>
                                    </div>

                                    <!-- Action Footer -->
                                    <div class="px-6 pb-4">
                                        <a href="{{ route('designer-detail', $design->designer->username) }}">
                                            <button
                                                class="w-full py-2 rounded-md bg-[var(--charcoal)] text-white text-sm font-medium hover:bg-[var(--hover-gray)] transition-colors">
                                                View Designer
                                            </button>
                                        </a>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </section>
            @else
                <!-- Empty State -->
                <section class="flex flex-col items-center justify-center py-20 text-center">
                    <div class="w-24 h-24 rounded-full bg-[var(--beige)] flex items-center justify-center shadow-md mb-6">
                        <span class="material-symbols-outlined text-5xl text-[var(--slate-gray)]">grid_view</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[var(--charcoal)] mb-2">No Designs Found</h3>
                    <p class="text-[var(--slate-gray)] mb-6">
                        We couldn’t find any designs for this category. Try exploring another one.
                    </p>
                    <a href="{{ route('designs') }}">
                        <button
                            class="px-6 py-3 rounded-md bg-[var(--midnight)] text-[var(--ivory)] text-sm font-medium hover:bg-[var(--hover-gray)] transition-colors">
                            Back to All Designs
                        </button>
                    </a>
                </section>
            @endif
        </div>
    </main>
@endsection