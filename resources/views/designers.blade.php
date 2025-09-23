@extends('layouts.app')

@section('content')
    <main class="container mx-auto flex flex-col lg:flex-row gap-8 p-6 lg:p-8">
        <aside class="w-full lg:w-80 bg-soft-beige rounded-xl shadow-lg p-6">
            <div class="relative mb-6">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-gray"> search
                </span>
                <input
                    class="form-input w-full rounded-full border-gray-300 bg-white py-2 pl-10 pr-4 text-dark-charcoal placeholder:text-slate-gray focus:border-emerald-green focus:ring-emerald-green"
                    placeholder="Search designers" type="text" />
            </div>
            <div class="mb-6">
                <h3 class="font-bold mb-3 text-lg text-dark-charcoal">Filter by</h3>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="flex items-center gap-2 rounded-full bg-light-gray px-4 py-2 text-sm font-medium text-dark-charcoal hover:bg-gray-300">
                        <span>Specialty</span>
                        <span class="material-symbols-outlined text-base"> expand_more </span>
                    </button>
                    <button
                        class="flex items-center gap-2 rounded-full bg-light-gray px-4 py-2 text-sm font-medium text-dark-charcoal hover:bg-gray-300">
                        <span>Location</span>
                        <span class="material-symbols-outlined text-base"> expand_more </span>
                    </button>
                    <button
                        class="flex items-center gap-2 rounded-full bg-light-gray px-4 py-2 text-sm font-medium text-dark-charcoal hover:bg-gray-300">
                        <span>Budget</span>
                        <span class="material-symbols-outlined text-base"> expand_more </span>
                    </button>
                </div>
            </div>
            <div>
                <h3 class="font-bold mb-3 text-lg text-dark-charcoal">Sort by</h3>
                <div class="flex flex-col gap-3">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input checked="" class="form-radio text-emerald-green focus:ring-emerald-green" name="sort"
                            type="radio" />
                        <span class="text-sm font-medium text-slate-gray">Recommended</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input class="form-radio text-emerald-green focus:ring-emerald-green" name="sort" type="radio" />
                        <span class="text-sm font-medium text-slate-gray">Price (Low to High)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input class="form-radio text-emerald-green focus:ring-emerald-green" name="sort" type="radio" />
                        <span class="text-sm font-medium text-slate-gray">Price (High to Low)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input class="form-radio text-emerald-green focus:ring-emerald-green" name="sort" type="radio" />
                        <span class="text-sm font-medium text-slate-gray">Rating</span>
                    </label>
                </div>
            </div>
        </aside>
        <section class="flex-1">
            <h2 class="text-3xl font-bold tracking-tight text-dark-charcoal mb-6">Find a Designer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow hover:shadow-2xl">
                    <div class="relative">
                        <img alt="Interior design by Sophia Carter" class="w-full h-56 object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmMRsCwIVDla72RcYWbHtueyZWrRY1sturUH58cVO3HjMFZ7LalJMMx2BLaSMQzN_6jgGeP-vYzy9i7ws6Jf6zAu2mAxHGDQeyDDHBcmqPWa9iFFWF2ArISgIOnoDVinuYcV4cW1YLCTi2m6I4gVYbx8SY0mRVkTGGH9obS6NVPmj2A1GLywlzJTbCgYjOxxVJzXRbTY_xKZk6IhCb5OlBAQn33wJ0HeORlPvpe6AD6iqdQ9xv1cBVBakRJ_NVpoGJRb-UUgFTxVA" />
                        <div
                            class="absolute top-2 left-2 bg-warm-gold text-white text-xs font-bold uppercase px-2 py-1 rounded-full">
                            Premium</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-charcoal mb-1">Sophia Carter</h3>
                        <p class="text-sm text-slate-gray mb-2">Interior Designer | 5 years experience</p>
                        <div class="flex items-center gap-1 text-warm-gold mb-4">
                            <span class="material-symbols-outlined text-lg">star</span>
                            <span class="font-bold text-sm">4.9</span>
                            <span class="text-slate-gray text-sm">(120 reviews)</span>
                        </div>
                        <button class="btn-emerald w-full rounded-full h-10 text-sm font-bold">View Profile</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow hover:shadow-2xl">
                    <img alt="Interior design by Ethan Bennett" class="w-full h-56 object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuVriRYOLlTKl4UdGTAN_wS2jTgP4cPmFUiiozCt0L7201hVcfY8onluro6CmcqeDRLkJ8_jNWR4-bERIqDuISLDiY9GgiJKtZP15t6rtNsKQ5v5G7cwXtvfevwhIfScJYbQu6mzrKymC0YE3Qzu5YCBzjlaZpCesHb4vnOTV70T8GpN0VvPpeFCVUP-AfCTSBX9HnWz3YBW_4PRx-Y7SgRV4pYkeBT7Ur24Ckx1qtsU-neZr5mXXh5tPLSoZc0dW_UPrl6OCU1Zk" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-charcoal mb-1">Ethan Bennett</h3>
                        <p class="text-sm text-slate-gray mb-2">Interior Designer | 8 years experience</p>
                        <div class="flex items-center gap-1 text-warm-gold mb-4">
                            <span class="material-symbols-outlined text-lg">star</span>
                            <span class="font-bold text-sm">4.8</span>
                            <span class="text-slate-gray text-sm">(95 reviews)</span>
                        </div>
                        <button class="btn-emerald w-full rounded-full h-10 text-sm font-bold">View Profile</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow hover:shadow-2xl">
                    <img alt="Interior design by Olivia Hayes" class="w-full h-56 object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlbXXUiL_37bFz-i2zj7XXiybs9f4Y45NeXZORgldcAtkGoDWBCPeE4vVyJOb-kI6RytC5eSVC7L8H6ymqdLJzjwIVYoDBjm6RkLToLP7jUH242mlSbw3nlaj3TKwT58rcfQ0VzhR-nQxm4elJNsiVG5xnToXPXq8iBwwwSA38IgTiOCYNynUwgFRN94JedH5BlV_hz9P4icdtI3TLWHTZaC98Q_vgdW6oCOnLiU4XGhoHfv8Ps3B7T7Yxv4V-3rRhNX6rPxN_rGQ" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-charcoal mb-1">Olivia Hayes</h3>
                        <p class="text-sm text-slate-gray mb-2">Interior Designer | 3 years experience</p>
                        <div class="flex items-center gap-1 text-warm-gold mb-4">
                            <span class="material-symbols-outlined text-lg">star</span>
                            <span class="font-bold text-sm">4.7</span>
                            <span class="text-slate-gray text-sm">(75 reviews)</span>
                        </div>
                        <button class="btn-emerald w-full rounded-full h-10 text-sm font-bold">View Profile</button>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow hover:shadow-2xl">
                    <img alt="Interior design by Liam Foster" class="w-full h-56 object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGXsbuKR3SR5jFF0VnTLhDJ_0HSnnyA-5eWjrgJJ6bmNuQlwWtAgqu7YgXKiMx04mzDUpouovmhox2uJSyXHUC9foH8yVjqOUZNNVgpEfMdFK_pLio8xcr3xId0el30mR-GHb_M78Q-CT46QeV8kFjHl6gqUy8hkLsQZmRTmGPyhXMtgMsNyam78RSEm4DwWQae3HfTC94-bF7eiEADfA1thBpl-ChPnLtU-F3ztPQaL93VVThO98Aj2BrtbO19yAB2lzd_3nhE18" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-charcoal mb-1">Liam Foster</h3>
                        <p class="text-sm text-slate-gray mb-2">Interior Designer | 10 years experience</p>
                        <div class="flex items-center gap-1 text-warm-gold mb-4">
                            <span class="material-symbols-outlined text-lg">star</span>
                            <span class="font-bold text-sm">4.9</span>
                            <span class="text-slate-gray text-sm">(150 reviews)</span>
                        </div>
                        <button class="btn-emerald w-full rounded-full h-10 text-sm font-bold">View Profile</button>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center pt-8">
                <nav class="flex items-center gap-2">
                    <a class="flex h-10 w-10 items-center justify-center rounded-full text-slate-gray hover:bg-light-gray"
                        href="#">
                        <span class="material-symbols-outlined"> chevron_left </span>
                    </a>
                    <a class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-green text-white text-sm font-bold"
                        href="#">1</a>
                    <a class="flex h-10 w-10 items-center justify-center rounded-full text-slate-gray hover:bg-light-gray text-sm"
                        href="#">2</a>
                    <a class="flex h-10 w-10 items-center justify-center rounded-full text-slate-gray hover:bg-light-gray text-sm"
                        href="#">3</a>
                    <span class="flex h-10 w-10 items-center justify-center text-slate-gray text-sm">...</span>
                    <a class="flex h-10 w-10 items-center justify-center rounded-full text-slate-gray hover:bg-light-gray text-sm"
                        href="#">10</a>
                    <a class="flex h-10 w-10 items-center justify-center rounded-full text-slate-gray hover:bg-light-gray"
                        href="#">
                        <span class="material-symbols-outlined"> chevron_right </span>
                    </a>
                </nav>
            </div>
        </section>
    </main>
@endsection