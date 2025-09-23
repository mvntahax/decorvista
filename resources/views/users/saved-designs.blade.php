@extends('layouts.app')

@section('content')
    <main class="container mx-auto flex-1 px-4 py-10 md:px-10">
        <div class="mx-auto max-w-7xl">
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
            <!-- Header -->
            @if ($savedDesigns->count() > 0)
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold tracking-tighter text-[var(--charcoal)]">Saved Designs</h2>
                    <p class="mt-2 text-[var(--slate-gray)]">
                        Explore and manage your curated collection of interior design ideas and inspirations.
                    </p>
                </div>

                <!-- Saved Designs Grid -->
                <section class="mb-12">
                    <h3 class="mb-6 border-b-2 border-[var(--light-gray)] pb-3 text-2xl font-bold text-[var(--charcoal)]">
                        Your Saved Designs
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($savedDesigns as $savedDesign)
                            <div
                                class="flex flex-col bg-[var(--beige)] rounded-md shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-300/50">

                                <!-- Image Section -->
                                <div class="relative">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover rounded-t-lg"
                                        style='background-image: url({{ asset('images/' . $savedDesign->design->image) }});'>
                                    </div>

                                    <!-- Gradient Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#27272A]/30 via-[#27272A]/10 to-transparent rounded-t-lg">
                                    </div>

                                    <!-- Top Buttons -->
                                    <div class="absolute top-2 right-2 flex gap-2">
                                        <!-- Remove Button -->
                                        <form action="{{ route('users.saved-designs.destroy', $savedDesign->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-8 h-8 rounded-full flex items-center justify-center hover:scale-110 bg-[var(--charcoal)] text-[var(--white)] shadow-md transition-all">
                                                <span class="material-symbols-outlined text-base">favorite</span>
                                            </button>
                                        </form>
                                    </div>

                                    <!-- Category Badge -->
                                    <span class="absolute top-2 left-2 bg-black/70 text-white text-xs px-2 py-1 rounded-md">
                                        {{ $savedDesign->design?->category->name ?? 'Uncategorized' }}
                                    </span>
                                </div>

                                <!-- Content Section -->
                                <div class="p-6 flex-grow space-y-2">
                                    <h3 class="text-lg font-bold text-[var(--charcoal)]">{{ $savedDesign->design?->title }}</h3>
                                    <p class="text-sm text-[var(--slate-gray)]">
                                        {{ $savedDesign->design?->description }}
                                    </p>
                                </div>

                                <!-- Action Footer -->
                                <div class="px-6 pb-4">
                                    <a href="{{ route('designer-detail', $savedDesign->design?->designer_id) }}">
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
                <!-- Empty Cart -->
                <div class="flex flex-col items-center justify-center py-20">
                    <span class="material-symbols-outlined text-[var(--slate-gray)] text-7xl mb-4">bookmark</span>
                    <h2 class="text-2xl font-bold text-[var(--charcoal)] mb-2">No Saved Designs Yet.</h2>
                    <p class="text-[var(--slate-gray)] mb-6">Start exploring designs and save your favorites to see them here.
                    </p>
                    <a href="{{ route('designs') }}"
                        class="rounded-lg bg-[var(--midnight)] py-2 px-4 font-semibold text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition">
                        Browse Designs
                    </a>
                </div>
            @endif
        </div>
    </main>
@endsection