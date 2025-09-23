@extends('auth.layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Left Section -->
    <div class="w-full md:w-1/2 bg-beige text-charcoal p-8 sm:p-10 flex flex-col justify-between">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined">chair</span>
            <h1 class="text-2xl tracking-tighter font-bold">{{ config('app.name') }}</h1>
        </div>

        <!-- Copy -->
        <div class="max-w-md md:max-w-lg mt-10 md:mt-0 text-center md:text-left">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Discover Your Dream Home.</h2>
            <p class="text-slate-gray text-base sm:text-lg">
                Join a community of design enthusiasts and professionals.
                Get inspired and create spaces you'll love.
            </p>
        </div>

        <!-- Footer -->
        <div class="mt-10 md:mt-0 text-center md:text-left">
            <p class="text-sm text-slate-gray">© 2025 {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="w-full md:w-1/2 bg-ivory p-6 sm:p-10 flex items-center justify-center">
        <div class="w-full max-w-md">
            <!-- Hero Image -->
            <div class="w-full rounded-lg overflow-hidden mb-8">
                <div
                    class="w-full aspect-[16/9] sm:aspect-[3/1] bg-center bg-no-repeat bg-cover"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvTBYsfCRDQumJCoU-RS5ROFFsasWScYvxAWAYFfz1C_3cgGa0sjXidttAtanaRNbd1vD35C4le1Rd-Erih8AzUOiQL1Du2fdVj8bSannWQ8aJbOJPOR3eHNU4T-KXtN57l7oKZyQxFJKlgt0VeUOxXMs_sKxhkjNzISXMmlg0iNu_0YQ1nikl4y-Qp6P7oP7u8Wxd67J2_nzrEoQW7ChoOyE2bY0bFzmRGY66L7Rr9YCz8XrUuBmAfJL06lmlAL-VdYrqFHVkr9k");'>
                </div>
            </div>

            <h3 class="text-2xl sm:text-3xl text-center font-bold text-charcoal mb-2">Create Your Account</h3>
            <p class="text-slate-gray text-center mb-8">Let's get you started on your design journey.</p>

            <!-- Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        value="{{ old('name') }}"
                        placeholder="Full Name"
                        autocomplete="name"
                        class="form-input w-full rounded-md border-light-gray h-12 px-4 placeholder:text-slate-gray text-charcoal text-base font-normal focus:outline-none focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50"
                    />
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        value="{{ old('email') }}"
                        placeholder="Email"
                        autocomplete="email"
                        class="form-input w-full rounded-md border-light-gray h-12 px-4 placeholder:text-slate-gray text-charcoal text-base font-normal focus:outline-none focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50"
                    />
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        placeholder="Password"
                        autocomplete="new-password"
                        class="form-input w-full rounded-md border-light-gray h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal focus:outline-none focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50"
                    />
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                        placeholder="Confirm Password"
                        autocomplete="new-password"
                        class="form-input w-full rounded-md border-light-gray h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal focus:outline-none focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50"
                    />
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-[var(--midnight)] text-[var(--ivory)] py-3 rounded-md font-semibold transition-colors hover:bg-[var(--hover-gray)]"
                >
                    Sign Up
                </button>
            </form>

            <!-- Footer link -->
            <p class="text-slate-gray text-center mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="text-charcoal font-semibold hover:underline">Log In</a>
            </p>
        </div>
    </div>
</div>
@endsection
