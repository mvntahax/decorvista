@extends('layouts.app')

@section('content')
    <main class="flex flex-col flex-1">
        <!-- Hero Section -->
        <section class="relative flex items-center justify-center min-h-[60vh] bg-cover bg-center bg-no-repeat"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.75)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuApq4i2q2H2bkuSz1dPTuAEz7Ea02xX2k7cct-ddfOD_6TSAkNHFqwX_AkDlnHBhxqSUPnYOstx7S1COueZTH8-kleW-xlXtQlVnweZcXcu9aGCa__p1MWjHfiGDoenCjN5swr9KO-KjKDQchmeJ6Wbddj2WPI6D3a5jdaKrHZISNgCAGjI4qTHg1c--iTWthzemuyv4Jq8fJR1zPaFhc1O5XbSZNaKjQyzvnaVeigx8H2tn4T45siOUaTXqAj_V9h7RIYbWHr34PU");'>
            <div class="text-center text-white px-6 md:px-12 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    About <span class="text-[var(--beige)]">DecorVista</span>
                </h1>
                <p class="text-lg md:text-xl font-light leading-relaxed">
                    Transforming spaces into reflections of your unique style and personality.
                    Our expert designers craft beautiful, functional, and sustainable interiors
                    that enhance your everyday living experience.
                </p>
            </div>
        </section>

        <!-- Features Section -->
        <section class="bg-[var(--beige)] py-16 px-6 lg:px-12">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                <!-- Personalized Design -->
                <div
                    class="bg-white p-8 rounded-lg border border-[var(--light-gray)] shadow-sm text-center hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-5xl text-[var(--charcoal)] mb-4">palette</span>
                    <h3 class="text-xl font-semibold text-[var(--charcoal)]">Personalized Design</h3>
                    <p class="text-[var(--slate-gray)] mt-3">Tailored solutions that reflect your taste, lifestyle, and
                        vision.</p>
                </div>

                <!-- Quality Craftsmanship -->
                <div
                    class="bg-white p-8 rounded-lg border border-[var(--light-gray)] shadow-sm text-center hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-5xl text-[var(--charcoal)] mb-4">chair</span>
                    <h3 class="text-xl font-semibold text-[var(--charcoal)]">Quality Craftsmanship</h3>
                    <p class="text-[var(--slate-gray)] mt-3">Built with premium materials and trusted artisans for lasting
                        quality.</p>
                </div>

                <!-- End-to-End Service -->
                <div
                    class="bg-white p-8 rounded-lg border border-[var(--light-gray)] shadow-sm text-center hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-5xl text-[var(--charcoal)] mb-4">support_agent</span>
                    <h3 class="text-xl font-semibold text-[var(--charcoal)]">End-to-End Service</h3>
                    <p class="text-[var(--slate-gray)] mt-3">From concept to completion, we manage every step of your
                        project.</p>
                </div>

                <!-- Sustainable Choices -->
                <div
                    class="bg-white p-8 rounded-lg border border-[var(--light-gray)] shadow-sm text-center hover:shadow-md transition-shadow">
                    <span class="material-symbols-outlined text-5xl text-[var(--charcoal)] mb-4">eco</span>
                    <h3 class="text-xl font-semibold text-[var(--charcoal)]">Sustainable Choices</h3>
                    <p class="text-[var(--slate-gray)] mt-3">Eco-friendly designs that blend style with responsibility.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-20 bg-[var(--ivory-white)]">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-charcoal)] mb-12">Meet the Team</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

                    <!-- Sophia -->
                    <div class="flex flex-col items-center gap-4 group">
                        <div class="relative w-40 h-40 md:w-48 md:h-48">
                            <div class="w-full h-full bg-center bg-cover rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjr3E8ItqDHgJy_0fRhLvL3FjTxdetyDSnEBQFpykZSB2u9RNJAEXtNRLZV8r8WswbBMgCziX3r0qSaFf5_vg01eM6QXWMlj_C9XGoKRyBYroHNjYlV2RxxtvI4DHVCf_NEsXeKmCitpHDVjTvqZKEASOZ5ljEmZTbbpavTF3Hwi51C6v5ZQH0s3XSYxIcmA-Ac7uZ7fOX4IPqg38iYrtgF2DZ8wjnYaI-0L4kxsUT7zvNQAu9xISxiFtE9KXa6WaASqjy8weX6tw');">
                            </div>
                        </div>
                        <div>
                            <p class="text-[var(--dark-charcoal)] text-lg font-semibold">Sophia Bennett</p>
                            <p class="text-[var(--slate-gray)] text-sm">Lead Designer</p>
                        </div>
                    </div>

                    <!-- Ethan -->
                    <div class="flex flex-col items-center gap-4 group">
                        <div class="relative w-40 h-40 md:w-48 md:h-48">
                            <div class="w-full h-full bg-center bg-cover rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOqXLo0zPtEPMdsDf_Aw6HK-ud0XZPJYWqfWuHUaYbqV35MEbSmzDdqgAOgDMpTcMAIG8anfziDEl1R_j6CfPR_ohW9eJxxr3FUroDxZu3CgYrZbk2mMrk4Knj63OPjBnQ1kGrO438nOwZtY1uSFMU-cE286hD1Ex708T8csgHkG1G7gh2_crBiEgD3h1iJTCPkiZSOGieCOd8nq6tviWp5hBNlHgIn5FH-4WzZabpAc7fTlPp-R2D8xNsfGLLjGrcHu_q2Xa5cJg');">
                            </div>
                        </div>
                        <div>
                            <p class="text-[var(--dark-charcoal)] text-lg font-semibold">Ethan Carter</p>
                            <p class="text-[var(--slate-gray)] text-sm">Design Director</p>
                        </div>
                    </div>

                    <!-- Olivia -->
                    <div class="flex flex-col items-center gap-4 group">
                        <div class="relative w-40 h-40 md:w-48 md:h-48">
                            <div class="w-full h-full bg-center bg-cover rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBuJMODkpfDlr3jGgVbcFuh6q1MkmcYsCTLk6HQCZqBKaWqbwU7CiJPRlpegEiKtEmkzem7KmyxIc_J5YwYG6kwNnunOji-WlE2YJ2GX4clELuuPs29wsBjmLOaPlQhbrvDzSOxNRO8DezDdKLOaPceoTXifIldRPvd6GpQGTrqWexDD4RwkaN00-isE4e1zn6BQR1XLWT8yD14RAtn2GOkSDT0nuADOyJM2VZ7Spll-1nZ9J3aCjy4hfsjBLz5nLISN08Ya-gUxJs');">
                            </div>
                        </div>
                        <div>
                            <p class="text-[var(--dark-charcoal)] text-lg font-semibold">Olivia Davis</p>
                            <p class="text-[var(--slate-gray)] text-sm">Project Manager</p>
                        </div>
                    </div>

                    <!-- Liam -->
                    <div class="flex flex-col items-center gap-4 group">
                        <div class="relative w-40 h-40 md:w-48 md:h-48">
                            <div class="w-full h-full bg-center bg-cover rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBDCcw3RirRrN9iyanL_ywZjeGnhhjtzB0rkYnZ5MXhYH-zeVmzUehXHeNvwrBbH5XSMiB__t-NwzOQiVXYSm5yWJUzf1xcpYoDOfCNWWmwo6hjNJIn1HYBsdrT-cADjVgas1aIZuubNrdV6IxP9Eg7ba3yfiG4XKSSSEgkeghvJYkdBb_OKRzM-Yge01HDKcxlGd_zwbIERRGJVgUGZtJjt5J7pnTLy68dnzKwCL0Oy1V702TCNlRhOPA1Hjd2vUuKqlSd1bsSDi0');">
                            </div>
                        </div>
                        <div>
                            <p class="text-[var(--dark-charcoal)] text-lg font-semibold">Liam Foster</p>
                            <p class="text-[var(--slate-gray)] text-sm">Creative Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-[var(--beige)] py-16">
            <div class="text-center max-w-2xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-[var(--charcoal)] leading-snug">
                    Ready to Start Your Home Transformation?
                </h2>
                <div class="mt-10 flex justify-center">
                    <a href="{{ route('products') }}"
                        class="px-6 py-3 rounded-md bg-[var(--charcoal)] text-[var(--ivory)] font-medium hover:bg-[var(--hover-gray)] transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection