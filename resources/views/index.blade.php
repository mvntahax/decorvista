@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <div class="bg-[var(--ivory)]">
            <section class="max-w-7xl mx-auto py-10 px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="max-w-7xl text-left">
                        <h1 class="text-5xl font-bold leading-tight tracking-tight md:text-6xl text-[var(--charcoal)]">
                            Elegance
                            in Every Detail</h1>
                        <p class="mt-4 text-lg font-normal text-[var(--slate-gray)]">Crafting timeless interiors that
                            reflect
                            your unique style. Let us bring your vision to life.</p>
                        <a href="{{ route('designs') }}">
                            <button
                                class="mt-8 px-4 py-3 rounded-md bg-[var(--charcoal)] text-white text-sm font-medium hover:bg-[var(--hover-gray)] transition-colors">
                                <span class="truncate">Get a Consultation</span>
                            </button>
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <img alt="Elegant interior design" class="rounded-md shadow-lg max-h-[500px] w-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwH8SRsU6E_C8dLHB6zXZTd8JLFfaJF_mYnvk0kXE2M03lEHLLYCM9z1gpIQ6RX6R7M36Y64xg5f8ewoVAcDAgq7GyjuFSNyGRqqZVQT0ZdYfDxJNammTZfSAaWiOFrkG5z9twjDFbohg8FNbZJFpvuKgl7UOX5ontICPGmhvw90ye2mgCFRU18QRFhjNRa9xWi_Uijd7S43LhDNv3XRm6cc0cIEaoXa72k-bIxcZ-z0Utv3YY7j4WxBSN4OGyOdnpgl_XMwrZqQ" />
                    </div>
                </div>
            </section>
            <section class="bg-[var(--beige)] max-w-7xl mx-auto py-10 px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <!-- Personalized Design -->
                    <div class="bg-white p-8 rounded-md border border-[var(--light-gray)] shadow-sm text-center">
                        <span class="material-symbols-outlined text-4xl text-[var(--charcoal)] mb-4">
                            palette
                        </span>
                        <h3 class="text-xl font-bold text-[var(--charcoal)]">Personalized Design</h3>
                        <p class="text-[var(--slate-gray)] mt-2">
                            Tailored solutions that reflect your taste, lifestyle, and vision.
                        </p>
                    </div>

                    <!-- Quality Craftsmanship -->
                    <div class="bg-white p-8 rounded-md border border-[var(--light-gray)] shadow-sm text-center">
                        <span class="material-symbols-outlined text-4xl text-[var(--charcoal)] mb-4">
                            chair
                        </span>
                        <h3 class="text-xl font-bold text-[var(--charcoal)]">Quality Craftsmanship</h3>
                        <p class="text-[var(--slate-gray)] mt-2">
                            Built with premium materials and trusted artisans for lasting quality.
                        </p>
                    </div>

                    <!-- End-to-End Service -->
                    <div class="bg-white p-8 rounded-md border border-[var(--light-gray)] shadow-sm text-center">
                        <span class="material-symbols-outlined text-4xl text-[var(--charcoal)] mb-4">
                            support_agent
                        </span>
                        <h3 class="text-xl font-bold text-[var(--charcoal)]">End-to-End Service</h3>
                        <p class="text-[var(--slate-gray)] mt-2">
                            From concept to completion, we manage every step of your project.
                        </p>
                    </div>

                    <!-- Sustainable Choices -->
                    <div class="bg-white p-8 rounded-md border border-[var(--light-gray)] shadow-sm text-center">
                        <span class="material-symbols-outlined text-4xl text-[var(--charcoal)] mb-4">
                            eco
                        </span>
                        <h3 class="text-xl font-bold text-[var(--charcoal)]">Sustainable Choices</h3>
                        <p class="text-[var(--slate-gray)] mt-2">
                            Eco-friendly designs that blend style with responsibility.
                        </p>
                    </div>
                </div>
            </section>
            <section class="max-w-7xl mx-auto py-10 px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center text-[var(--charcoal)]">Inspiration Gallery</h2>
                <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Modern living room" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMaGt5ZYY31D565I6ZjhumuAWROBJ72C0wg0loMdT2UMdf0JGNRxnoN4pl8wkkgLtnKbs_T7VrLzeWNCP5xitXzszgAz-LDzN5KBvKXSoDlWpWIIqeuOHOT4D8YrroyP3Or4tC5BDT3oDcBkv8ozQxPBMBtiNcAi3jerr3Na0zD810Qw2frF0JnizzRy5i0QFjoK4xYNoGNkVXBIbl2sCb7VFoqDgZt9G2ZGNM3ppMaPzyBuaIEVnYKPPylVEMZXElz2WzId2qAw" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Cozy bedroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOLgwF0-M3bQiEcLehEXGW9gYxx3l024SQv1b5J_64IFZ6s41Dlbj9S6z3PiwAVQ4s33ULV0df92XgmrOzd9wMJbrTb2yHRexYug3MxCAfVtUyQMIvYpG9IFXue0oK6eaQXsqCo0RWbH8jeqwCSMV_yn-apGh2CT4Ct7S7JinCJg86qEMQrV-avpxUgnCX30kXUGpOomovAF-KEqtSrKNrvgypf9US4-dSj4QLfMxorT05GVQSQZDUEu3mI4H6ncybdXodGmjLlw" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Minimalist kitchen" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxOSjJt-eQPuctXDl_PCqtPD-FWj8Nm9vq439bGrt5u7P4JO8vivaKzP6NKB2Rt20K0pd-vErOV4SYuV5LImoWEkvTDnOZtdjmdqD8NZqZia_Yg9h49P76n7dHLii9L7rOpYXxQ1GO-UbMfaKHXTyMoaEsnN1Tv255vkIV8EjyugzP46xWz_Zwz6ZSx5PZKryhi0a0IpWT2c3wOmxd4pRiludDLw9nLQur4RAT8LibhI3MCrVhaLGCuUTb4P_-KWTXHc_fB4JVQw" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Chic dining area" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkkk6687Cn8xhLmWIAL0RjIbbxk1yYCEopts6bU4UXVFYnAeAWpQkz0M0CVDvazALOjY-tL7cRR03jlOhGQDGBIx3jT5dE6BZSEZQj9V8X0CPITRMaHGdZTkzvQaaktONPey85cPXqwljlTIR1KQEkqXyn0d2G4nQTrqOU8muVqA-1K8DPawJ6URC8VYnM2bmrLEyGKS5K5XgAcC7shhbvS-xbHN-v3I2Xq_Hra-llZBKVP1sZd0iPLpMA3Eatl4wDWFL3hAdyYQ" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Stylish home office" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRVnOX9PLVHUydL3houcktexmGe_cjV6uvpJqFPZ8dmtNZmpIMhQgZyXq19al1s2Tltu-NAizoRmCrQiSgsHbqWaQCUKDxxcuXeubWLzu44-2Bn_K5DapTJ7lg0TBeKHpl0tNo7XlWDcgXPQwND9Oy-VaKxWAeg5EGwU_LbDcE0L3ESScerT18eziiaEI7CSJzQKBy8i_AivefERtrr-n_OgZmJEvtbxQjaRenkbA1t3Sb-JnRoNYZkqTw7H8sFpzhU2iT5trkLw" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxfDYKIe3Etmad4VUKLI2MlOGp4XthDEjhWPp_ZvcjgmfejQZrzlw2fJDMUMscSaphESo4zvF1Gg0WtRENtX4J16a2RE0Z89x_gtGtqQSmG9I8YIgdPlAuGgwc6dR0rVqBSZrvsr-v4ygjJZblbY2l5I3PxvmbKBYuLDR5OPnjL5K41iUIL8-uHph6NUpFIoXVfFTZfLTjj3NogZndqVRunezOSR3MMNylpiU6Lr5gR8bbNtCj9pxnMdbODX4sGO7KDQ_gqmBsLA" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBv9FndcDrK_2RDqJXzupeL_w5Wl_9j6cIcwMszn0wNJuhgbJI8crIqP_o0nMYggbeAro7MtWgQdbwywPniXJdWH5FTT1N2Myuo8f1IQMzW-876YR2tylMnOTryHwwtk1rNctZCc2zuEANaRCVYi31yeB8iQ1LYC-sKnXVlqguEGsEGz6nKLvivew86lXVcdkmDpINgYRbKCmj1RS8EOMp8qTB1IlEZHcK3TK2rY3CYm6q60uiAEHznfn9QEf31b6lCaaKJECNp5Q" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFebyKydGsI4rPlyrJwk7Kha04LkV6gE6QNKZqh6tOc6bCpbQpeYdnl_qNh47yjmdNc8HZoOsTV3neTgK4tpg_W193hMh8mzCxZcceOG9jQyNtJgqd9UD5t7hgdny6fptw7b6CRwi5XeukBKFHfAbIeuVRjSmJrzaoW--IkwBeDPHVDtuksm_DKYcWNsCsKlFhnOtfAWNccf70NNFDQNiRMM1Z-UGhGHTQCnIW7BxF8QERWhLm0ASiEErCMNFhEaMWoz7vpGz2LA" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6-q_zRCRuNbx3UaV0QQMJq1mEdTjWfqYTXjTpyUrvyONAs4HpqAoRwX1XmdQqCmIMn84OiAVp7JHu-XSy7OTHbEKhZNdIEgzR0rhkI5dwO1Y0KNI-7-Rtdb3XZU9NfPcWcFRw3ifm9mEFs6soQfaxxZ3Oliyj45iQmJzZ-jNyc-pH4AzHe721-DN0RT4_m4ZhzBdsm25dCD5TK0nESgUhDFZzHrZFKkm0WLFMsLIgtflNuacQ7eKTd-5cR7eRcvUfKWCYfdVpBQ" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZn3OCFlK4-JKpfoco3mM7lYIMCfOa-VzmGAAnfODgDF9TIC7cgWJJLsjb48KsCRKXNQn_o7AatLqjhKAektiNKYZgGX0edumM0iMAE7QCRDGsUfAtobqsSgEKNf_hqqAcH_yZ9afYALLZOJO3gkKyUfIDolBK4Yu6nt-WTXFhsWY_9WGdVjtMgL_nBelQH1TZcyfdM3d84TMGAwhI3JFgdoqu8oApa68Q7DYGVaBTEsc-4fbQ4sa3izC7PYcb87mKe4J0TS9oEg" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7UEuWR8XMFANF3wCpQFiro59YlWRWG0ffNLNQSylCmcJbT7IxbRp3KEdO1oMnmOmLHXvtF1cJ4EcfelbqG-gW1Y0O5p9YGiEQXQTEq6Eqpu-qd87ZYNvACFPuzzF-_yDjfTehi7keTTKq8-IG4gjN7YYTdTIyieICSzVMTRMKqs5P5WWCVsOd5V2JGSvfHkTuMq7Ut40VZcwnERw7i1QoH5UFti0hO1VLjbhJwuMqSldx3FIVhG84D5Qv-VWsFv3jg6LSMGZJWJ4" />
                    </div>
                    <div class="bg-white p-2 rounded-md border border-[var(--light-gray)] shadow-sm">
                        <img alt="Elegant bathroom" class="w-full h-full object-cover rounded-md"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvTBYsfCRDQumJCoU-RS5ROFFsasWScYvxAWAYFfz1C_3cgGa0sjXidttAtanaRNbd1vD35C4le1Rd-Erih8AzUOiQL1Du2fdVj8bSannWQ8aJbOJPOR3eHNU4T-KXtN57l7oKZyQxFJKlgt0VeUOxXMs_sKxhkjNzISXMmlg0iNu_0YQ1nikl4y-Qp6P7oP7u8Wxd67J2_nzrEoQW7ChoOyE2bY0bFzmRGY66L7Rr9YCz8XrUuBmAfJL06lmlAL-VdYrqFHVkr9k" />
                    </div>
                </div>
            </section>
            <section class="bg-[var(--beige)] max-w-7xl mx-auto py-10 px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <h2 class="text-[var(--charcoal)] text-4xl font-bold leading-tight">Ready to Start Your Home
                        Transformation?</h2>
                    <div class="mt-8 flex justify-center">
                        <a href="{{ route('products') }}"
                            class="px-4 py-3 rounded-md bg-[var(--charcoal)] text-[var(--ivory)] font-medium hover:bg-[var(--hover-gray)] transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection