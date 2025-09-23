@extends('layouts.app')

@section('content')
    <main class="flex flex-1 justify-center py-10 px-4 sm:px-6 lg:px-8">
        <div class="w-full mx-auto max-w-7xl">

            <!-- Designer Header -->
            <section class="mb-12 rounded-lg bg-[var(--beige)] p-8 shadow-sm">
                <div class="flex flex-col items-center gap-6 md:flex-row">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[var(--white)] shadow-md shrink-0">
                        @if ($designer->image)
                            <img src="{{ asset('images/' . $designer->image) }}" alt="{{ $designer->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <img src="https://www.londondentalsmiles.co.uk/wp-content/uploads/2017/06/person-dummy.jpg"
                                alt="Placeholder" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class="flex-grow text-center md:text-left">
                        <h2 class="text-3xl font-bold text-[var(--charcoal)]">{{ $designer->name }}</h2>
                        <p class="text-lg text-[var(--slate-gray)]">{{ $designer->title }}</p>
                        <p class="mt-1 text-sm text-[var(--slate-gray)]">
                            {{ $designer->years_of_experience }} years of experience
                        </p>
                    </div>
                </div>
            </section>

            <!-- Booking Form -->
            <section>
                <h3 class="mb-6 border-b-2 border-[var(--light-gray)] pb-3 text-2xl font-bold text-[var(--charcoal)]">Book a
                    Consultation</h3>

                <form method="POST" action="{{ route('book-consultation.store') }}" class="space-y-6">
                    @csrf
                    <input type="hidden" name="designer_id" value="{{ $designer->id }}">

                    <!-- Date & Purpose -->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="date" class="block text-sm font-medium text-[var(--slate-gray)] mb-2">
                                Choose Date
                            </label>
                            <input type="date" id="date" name="scheduled_datetime" class="form-input w-full rounded-md border-light-gray h-12 px-4 text-[var(--charcoal)] 
                                                    focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)]"
                                value="{{ old('scheduled_datetime') }}">
                            @error('scheduled_datetime')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="purpose" class="block text-sm font-medium text-[var(--slate-gray)] mb-2">
                                Purpose
                            </label>
                            <input placeholder="Home Renovation, Office Design..." type="purpose" id="purpose"
                                name="purpose" class="form-input w-full rounded-md border-light-gray h-12 px-4 text-[var(--charcoal)] 
                                                   focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)]"
                                value="{{ old('purpose') }}">
                            @error('purpose')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Notes -->
                    <div>
                        <label for="notes" class="block text-sm font-medium text-[var(--slate-gray)] mb-2">
                            Additional Notes
                        </label>
                        <textarea id="notes" name="notes" rows="4"
                            placeholder="Describe your project, goals, or requirements..." class="form-textarea w-full rounded-md border-light-gray px-4 py-3 text-[var(--charcoal)] 
                                                  focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)]"></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-4">
                        <a type="submit" href="{{ route('designer-detail', $designer->id) }}"
                            class="rounded-md border border-[var(--charcoal)] bg-[var(--ivory)] py-2 px-4 font-medium text-[var(--charcoal)] hover:bg-[var(--beige)] transition">
                            Cancel
                        </a>
                        <button type="submit"
                            class="rounded-md bg-[var(--midnight)] py-2 px-4 font-medium text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition">
                            Confirm Booking
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection