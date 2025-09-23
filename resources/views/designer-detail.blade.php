@extends('layouts.app')

@section('content')
    <main class="flex flex-1 justify-center py-10 px-4 sm:px-6 lg:px-8">
        <div class="w-full mx-auto max-w-7xl space-y-10">

            <!-- Profile Section -->
            <section class="rounded-lg bg-[var(--beige)] p-8">
                <div class="flex flex-col items-center gap-6 md:flex-row">
                    <!-- Designer Image -->
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[var(--ivory)] shadow-md shrink-0">
                        @if ($designer->image)
                            <img src="{{ asset('images/' . $designer->image) }}" alt="{{ $designer->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <img src="https://www.londondentalsmiles.co.uk/wp-content/uploads/2017/06/person-dummy.jpg"
                                alt="Placeholder" class="w-full h-full object-cover">
                        @endif
                    </div>

                    <!-- Designer Info -->
                    <div class="flex-grow text-center md:text-left space-y-1">
                        <h2 class="text-3xl font-bold text-[var(--charcoal)]">{{ $designer->name }}</h2>
                        <p class="text-lg text-[var(--slate-gray)]">{{ $designer->title }}</p>
                        <p class="text-sm text-[var(--slate-gray)]">
                            {{ $designer->years_of_experience }} years of experience
                        </p>
                    </div>

                    <!-- Contact Button -->
                    <a href="{{ route('book-consultation', $designer->username) }}">
                        <button
                            class="flex w-full md:w-auto items-center justify-center gap-2 rounded-lg bg-[var(--midnight)] px-6 py-3 text-sm font-medium text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition-all shadow-md">
                            <span>Contact Designer</span>
                        </button>
                    </a>
                </div>
            </section>

            <!-- Tabs -->
            <div class="border-b border-[var(--light-gray)]">
                <nav aria-label="Tabs" class="-mb-px flex space-x-8">
                    @foreach (['portfolio' => 'Portfolio', 'about' => 'About', 'specialties' => 'Specialties', 'contact' => 'Contact'] as $id => $label)
                        <a href="#{{ $id }}"
                            class="tab-link border-transparent text-[var(--slate-gray)] hover:text-[var(--charcoal)] hover:border-[var(--light-gray)] whitespace-nowrap border-b-2 py-3 px-2 text-sm font-medium transition-colors">
                            {{ $label }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <!-- Portfolio Section -->
            <section id="portfolio">
                <h3 class="mb-6 text-2xl font-bold text-[var(--charcoal)]">Featured Projects</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($designs as $design)
                        <div
                            class="flex flex-col bg-[var(--ivory)] rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg hover:shadow-gray-300/50">

                            <!-- Image -->
                            <div class="relative">
                                <div class="w-full h-56 overflow-hidden">
                                    <img src="{{ asset('images/' . $design->image) }}" alt="{{ $design->title }}"
                                        class="w-full h-full object-cover rounded-t-lg">
                                </div>

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>

                                <!-- Category Badge -->
                                <span
                                    class="absolute top-2 left-2 bg-black/70 text-white text-xs px-2 py-1 rounded-md shadow-sm">
                                    {{ $design->category->name }}
                                </span>
                            </div>

                            <!-- Content -->
                            <div class="p-4 flex-grow space-y-2">
                                <h3 class="text-lg font-bold text-[var(--charcoal)]">{{ $design->title }}</h3>
                                <p class="text-sm text-[var(--slate-gray)] line-clamp-3">
                                    {{ $design->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- About -->
            <section id="about" class="bg-[var(--beige)] rounded-lg p-8 shadow-sm">
                <h3 class="mb-4 text-2xl font-bold text-[var(--charcoal)]">About {{ $designer->name }}</h3>
                <p class="text-base leading-relaxed text-[var(--slate-gray)]">
                    {{ $designer->description }}
                </p>
            </section>

            <!-- Specialties -->
            <section id="specialties">
                <h3 class="mb-6 text-2xl font-bold text-[var(--charcoal)]">Specialties</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach ([$designer->skill1, $designer->skill2, $designer->skill3, $designer->skill4, $designer->skill5] as $skill)
                        @if ($skill)
                            <span
                                class="rounded-md bg-[var(--midnight)] px-6 py-2 text-sm font-medium text-[var(--ivory)] shadow-sm">
                                {{ $skill }}
                            </span>
                        @endif
                    @endforeach
                </div>
            </section>

            <!-- Contact Info -->
            <section id="contact">
                <h3 class="mb-6 text-2xl font-bold text-[var(--charcoal)]">Contact Information</h3>
                <div
                    class="divide-y divide-[var(--light-gray)] rounded-lg border border-[var(--light-gray)] bg-[var(--beige)] shadow-sm">
                    <div class="grid grid-cols-1 gap-2 py-4 px-6 sm:grid-cols-3">
                        <p class="font-medium text-[var(--slate-gray)]">Email</p>
                        <p class="text-[var(--charcoal)] sm:col-span-2">{{ $designer->email }}</p>
                    </div>
                    <div class="grid grid-cols-1 gap-2 py-4 px-6 sm:grid-cols-3">
                        <p class="font-medium text-[var(--slate-gray)]">Phone</p>
                        <p class="text-[var(--charcoal)] sm:col-span-2">{{ $designer->phone }}</p>
                    </div>
                    <div class="grid grid-cols-1 gap-2 py-4 px-6 sm:grid-cols-3">
                        <p class="font-medium text-[var(--slate-gray)]">Address</p>
                        <p class="text-[var(--charcoal)] sm:col-span-2">{{ $designer->address }}</p>
                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection