@extends('auth.layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Left Section -->
    <div class="w-full md:w-1/2 bg-beige text-charcoal p-8 sm:p-10 flex flex-col justify-between">
        <!-- Top: Logo -->
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined">chair</span>
            <h1 class="text-2xl tracking-tighter font-bold">{{ config('app.name') }}</h1>
        </div>

        <!-- Middle: Headline -->
        <div class="max-w-md md:max-w-lg mt-10 md:mt-0 mx-auto md:mx-0 text-center md:text-left">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Welcome Back!</h2>
            <p class="text-slate-gray text-base sm:text-lg">
                Log in to continue your design journey, access your saved projects, and discover new inspirations
                tailored just for you.
            </p>
        </div>

        <!-- Bottom: Footer -->
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
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAAZ8Y1uJgQihZDn-j2B1NPHlZ__e0UvJV6dSXjaAz53fOuVpp_q1v89WLJc3UsbNCTFBJuQSRfsX3UkMPTObR51R9if9q8gknLbdLuqceNkXStdDe8qo6WbeeRMElQFl1PZrxhS2Xhap78y3I6NrpBsyPTRnSpmvhHhu7x2kJNhf312tew8EYGFgxKj_hE4SV7Vh0vmR-KLmSdxCNQRbxf2p7FhXCOdVzzbCLfTB_iIEgJV8Zw4ttaEBa0jrDJRhG-yQUm48Uk56k");'>
                </div>
            </div>

            <h3 class="text-2xl sm:text-3xl text-center font-bold text-charcoal mb-2">Log In to Your Account</h3>
            <p class="text-slate-gray text-center mb-8">Enter your credentials to continue.</p>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
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
                        type="password"
                        name="password"
                        required
                        placeholder="Password"
                        autocomplete="current-password"
                        class="form-input w-full rounded-md border-light-gray h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal focus:outline-none focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50"
                    />
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-[var(--midnight)] text-[var(--ivory)] py-3 rounded-md font-semibold transition-colors hover:bg-[var(--hover-gray)]"
                >
                    Log In
                </button>
            </form>

            <!-- Footer link -->
            <p class="text-slate-gray text-center mt-6">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-charcoal font-semibold hover:underline">Sign Up</a>
            </p>
        </div>
    </div>
</div>
@endsection
