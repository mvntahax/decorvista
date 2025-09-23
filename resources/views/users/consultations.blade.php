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
            @if ($consultations->count() > 0)
                <div class="mb-12 text-center">
                    <h2 class="text-4xl font-extrabold tracking-tighter text-[var(--charcoal)]">Consultations</h2>
                    <p class="mt-2 text-[var(--slate-gray)]">
                        Manage your past and upcoming consultations with professional designers.
                    </p>
                </div>

                <!-- Consultation List -->
                <section>
                    <h3 class="mb-6 border-b-2 border-[var(--light-gray)] pb-3 text-2xl font-bold text-[var(--charcoal)]">
                        Your Consultations
                    </h3>
                    <div class="space-y-6">
                        @foreach ($consultations as $consultation)
                            <div
                                class="rounded-lg bg-[var(--beige)] shadow hover:shadow-md transition-all overflow-hidden border border-gray-100">
                                <div class="grid md:grid-cols-3">
                                    <!-- Designer Image -->
                                    <div class="h-48 md:h-full bg-center bg-cover"
                                        style="background-image: url('{{ asset('images/' . ($consultation->designer?->image ?? 'default.jpg')) }}')">
                                    </div>

                                    <!-- Consultation Info -->
                                    <div class="p-6 md:col-span-2 flex flex-col justify-between">
                                        <div>
                                            <!-- Date + Status -->
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="text-sm text-gray-500">
                                                    {{ \Carbon\Carbon::parse($consultation->scheduled_datetime)->format('M d, Y') }}
                                                </span>
                                                <span
                                                    class="text-xs px-2 py-1 rounded-full 
                                                                                                                                        {{ $consultation->status === 'completed' ? 'bg-green-100 text-green-700' : ($consultation->status === 'cancelled' ? 'bg-red-100 text-red-700' : 'bg-[var(--ivory)] text-[var(--charcoal)]') }}">
                                                    {{ ucfirst($consultation->status) }}
                                                </span>
                                            </div>

                                            <!-- Designer Name -->
                                            <h4 class="text-xl font-semibold text-gray-900 mb-2">
                                                {{ $consultation->purpose }} Consultation with
                                                {{ $consultation->designer?->name ?? 'Unassigned' }}
                                            </h4>

                                            <!-- Notes -->
                                            <p class="text-gray-600 text-sm mb-4">
                                                {{ $consultation->notes ?? 'No additional notes provided.' }}
                                            </p>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="flex gap-3">
                                            <a href="{{ route('designer-detail', $consultation->designer?->username) }}"
                                                class="flex items-center gap-2 px-4 py-2 text-sm font-medium bg-[var(--midnight)] text-white rounded-md hover:bg-[var(--hover-gray)] transition">
                                                View Details
                                            </a>

                                            <form method="POST"
                                                action="{{ route('users.consultations.destroy', $consultation->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="flex items-center gap-2 px-4 py-2 text-sm font-medium border border-[var(--midnight)] bg-[var(--beige)] text-[var(--midnight)] rounded-md hover:bg-[var(--ivory)] transition">
                                                    Cancel
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @else
                <!-- Empty Cart -->
                <div class="flex flex-col items-center justify-center py-20">
                    <span class="material-symbols-outlined text-[var(--slate-gray)] text-7xl mb-4">event</span>
                    <h2 class="text-2xl font-bold text-[var(--charcoal)] mb-2">No Consultations Scheduled</h2>
                    <p class="text-[var(--slate-gray)] mb-6">You haven’t booked any consultations yet. Schedule one now.
                    </p>
                    <a href="{{ route('designs') }}"
                        class="rounded-lg bg-[var(--midnight)] py-2 px-4 font-semibold text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition">
                        Browse Designers
                    </a>
                </div>
            @endif
        </div>
    </main>
@endsection