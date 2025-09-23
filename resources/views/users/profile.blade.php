@extends('layouts.app')

@section('content')
    <main class="container mx-auto flex min-h-screen px-4 py-10 md:px-10 justify-center items-center">
        <div class="mx-auto max-w-7xl w-full">
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
            <div class="mb-12 text-center">
                <h2 class="text-4xl font-extrabold tracking-tighter text-[var(--charcoal)]">My Profile</h2>
                <p class="mt-2 text-[var(--slate-gray)]">View and edit your profile information.</p>
            </div>
            <section class="mb-12">
                <h3 class="mb-6 border-b-2 border-[var(--light-gray)] pb-3 text-2xl font-bold text-[var(--charcoal)]">
                    Update Profile Information
                </h3>
                <form method="POST" action="{{ route('users.profile.update') }}" class="space-y-6">
                    @csrf
                    @method('patch')
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-[var(--slate-gray)]" for="fullName">Full
                                Name</label>
                            <input name="name"
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="fullName" placeholder="Name" type="text" value="{{ old('name', $user?->name) }}" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-[var(--slate-gray)]"
                                for="username">Username</label>
                            <input name="username"
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="username" placeholder="Username" type="text"
                                value="{{ old('username', $user?->username) }}" />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-[var(--slate-gray)]" for="email">Email
                                Address</label>
                            <input name="email"
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="email" placeholder="Email" type="email" value="{{ old('email', $user?->email) }}" />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-[var(--slate-gray)]" for="phone">Phone
                                Number</label>
                            <input name="phone"
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="phone" placeholder="Phone Number" type="tel"
                                value="{{ old('phone', $user?->phone) }}" />
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="bg-[var(--midnight)] text-[var(--ivory)] px-4 py-2 rounded-md hover:bg-[var(--hover-gray)] transition-colors font-semibold"
                            type="submit">
                            Update Profile
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection