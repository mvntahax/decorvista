@extends('layouts.app')

@section('content')
    <main class="flex flex-1 justify-center py-16 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="bg-[var(--beige)] p-8 rounded-lg shadow-md">
                <h1 class="text-[var(--charcoal)] tracking-tight text-4xl font-bold leading-tight">Get in Touch</h1>
                <p class="text-[var(--slate-gray)] text-lg font-normal leading-normal mt-4">
                    We're here to help! If you have any questions, feedback, or need assistance, please don't hesitate to
                    reach out.
                </p>
                <div class="mt-12">
                    <h2 class="text-[var(--charcoal)] text-xl font-bold leading-tight tracking-[-0.015em]">Contact
                        Information</h2>
                    <div class="mt-6 space-y-4">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-[var(--slate-gray)]">mail</span>
                            <p class="text-[var(--charcoal)] text-base font-normal leading-normal">
                                support@decorvista.com</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-[var(--slate-gray)]">phone</span>
                            <p class="text-[var(--charcoal)] text-base font-normal leading-normal">+1 (555) 123-4567
                            </p>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-[var(--slate-gray)] mt-1">location_on</span>
                            <p class="text-[var(--charcoal)] text-base font-normal leading-normal">123 Design Lane,
                                Suite 100<br />Creativity City, CA 90210</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-[var(--charcoal)] text-xl font-bold leading-tight tracking-[-0.015em]">Send us a
                        message</h2>
                    <form class="mt-6 space-y-6">
                        <div>
                            <label class="text-[var(--charcoal)] text-sm font-medium leading-normal sr-only" for="name">Your
                                Name</label>
                            <input
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="name" placeholder="Your Name" type="text" />
                        </div>
                        <div>
                            <label class="text-[var(--charcoal)] text-sm font-medium leading-normal sr-only"
                                for="email">Your Email</label>
                            <input
                                class="form-input w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 h-12 px-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="email" placeholder="Your Email" type="email" />
                        </div>
                        <div>
                            <label class="text-[var(--charcoal)] text-sm font-medium leading-normal sr-only"
                                for="message">Your Message</label>
                            <textarea
                                class="form-textarea w-full rounded-md border-light-gray focus:border-[var(--charcoal)] focus:ring-[var(--zinc-gray)] focus:ring-opacity-50 p-4 placeholder:text-[var(--slate-gray)] text-[var(--charcoal)] text-base font-normal"
                                id="message" placeholder="Your Message" rows="5"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="w-full bg-[var(--midnight)] text-[var(--ivory)] py-3 rounded-md hover:bg-[var(--hover-gray)] transition-colors font-semibold"
                                type="submit">
                                <span class="truncate">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="space-y-8">
                <h2 class="text-[var(--charcoal)] text-3xl font-bold leading-tight tracking-tight">Frequently Asked
                    Questions</h2>
                <div class="space-y-4">
                    <details
                        class="group rounded-lg border border-[var(--light-gray)] bg-[var(--beige)] shadow-sm transition-all duration-300 ease-in-out hover:border-[var(--emerald-green)]">
                        <summary class="flex cursor-pointer list-none items-center justify-between p-6">
                            <h3 class="text-[var(--charcoal)] text-lg font-medium">How do I place an order?</h3>
                            <div class="text-[var(--slate-gray)] transition-transform duration-300 group-open:rotate-180">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-[var(--slate-gray)] text-base leading-relaxed">
                                To place an order, simply browse our products, add your desired items to the cart, and
                                proceed to checkout. You'll be guided through the necessary steps to complete your purchase
                                securely.
                            </p>
                        </div>
                    </details>
                    <details
                        class="group rounded-lg border border-[var(--light-gray)] bg-[var(--beige)] shadow-sm transition-all duration-300 ease-in-out hover:border-[var(--emerald-green)]">
                        <summary class="flex cursor-pointer list-none items-center justify-between p-6">
                            <h3 class="text-[var(--charcoal)] text-lg font-medium">What are the shipping options?</h3>
                            <div class="text-[var(--slate-gray)] transition-transform duration-300 group-open:rotate-180">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-[var(--slate-gray)] text-base leading-relaxed">
                                We offer standard, expedited, and white-glove shipping options. You can select your
                                preferred method during checkout. Shipping costs and estimated delivery times will be
                                calculated based on your location and the items in your order.
                            </p>
                        </div>
                    </details>
                    <details
                        class="group rounded-lg border border-[var(--light-gray)] bg-[var(--beige)] shadow-sm transition-all duration-300 ease-in-out hover:border-[var(--emerald-green)]">
                        <summary class="flex cursor-pointer list-none items-center justify-between p-6">
                            <h3 class="text-[var(--charcoal)] text-lg font-medium">What is your return policy?</h3>
                            <div class="text-[var(--slate-gray)] transition-transform duration-300 group-open:rotate-180">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-[var(--slate-gray)] text-base leading-relaxed">
                                We accept returns on most items within 30 days of delivery. The items must be in their
                                original condition and packaging. Please visit our Returns page for detailed information and
                                to initiate a return request.
                            </p>
                        </div>
                    </details>
                    <details
                        class="group rounded-lg border border-[var(--light-gray)] bg-[var(--beige)] shadow-sm transition-all duration-300 ease-in-out hover:border-[var(--emerald-green)]">
                        <summary class="flex cursor-pointer list-none items-center justify-between p-6">
                            <h3 class="text-[var(--charcoal)] text-lg font-medium">Do you offer design services?</h3>
                            <div class="text-[var(--slate-gray)] transition-transform duration-300 group-open:rotate-180">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-[var(--slate-gray)] text-base leading-relaxed">
                                Yes, we do! Our team of expert interior designers can help you create the space of your
                                dreams. Please visit our Design Services page to learn more about our packages and to book a
                                consultation.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </main>
@endsection