@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="mb-6 text-sm text-[var(--slate-gray)]">
                    <a class="hover:text-[var(--dark-charcoal)]" href="#">Home</a>
                    <span class="mx-2">/</span>
                    <a class="hover:text-[var(--dark-charcoal)]" href="#">Furniture</a>
                    <span class="mx-2">/</span>
                    <span class="text-[var(--dark-charcoal)] font-medium">Sofas</span>
                </div>
                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <div class="grid grid-cols-2 grid-rows-2 gap-4">
                            <div class="col-span-2 row-span-2 rounded-lg overflow-hidden"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3PZTRhOg2MIOdbMAAhjy8bxalNAB2-Rzz8MhpQsun65XFQ1hxWh2hf_zIMoURkWwq6DcC-UPLxO_WVukIi8ky-y3M6gM9__a5C_WfxTRCUj6CXGFVAGUe7p6XTpNcsFMvN1499dcZm7AEZrJbrW1XEgSVODGyH7q26pHqbXaYWuSZSdXmdD9-P2L7g1-RmiJH2RxlCLZzD_6FtpHaK-tGlMz9bu4mLluLGwU050H-7saIKnMWRS8yEUKSpp_R11VYpFN7o9KzWqI"); background-size: cover; background-position: center;'>
                            </div>
                            <div class="rounded-lg overflow-hidden"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDuZG2SwialxD3WV5Ypjx6zh6fXEEbkI9GWhpTtIJZoQaL2f0YDwfEgDrDdLyrMU1zoBWlrXlFJQytkrqljdHs4MGbuohiHS747pHiHCxoY955JClusEfBDZqNb694zAGAoLL8OhBt9ft53usGF1o_AUOuFuaqwq5FARKhwCztdJHEYNR7Be1qcZt4A2PL2JKgYkeLBh6r9ftigu3aMGBGN8yKUY3fC6BuYoaPBQW-VRkjSUu2XwPYzmIKTjA5QnQh_SxcsVIYT1Og"); background-size: cover; background-position: center;'>
                            </div>
                            <div class="rounded-lg overflow-hidden"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCSsCyynycf0IsBUIGGtldOT5w2hd3OYgUcXuYudr3nPdbTu_JPgeWFyJzSFzdw1MTL-aLbOR0uXrVOq1IGHiEQ7bS4ENgUPjrCFZIfddxXTxzYjoNkHLYQrNtUMMtb6zV8Y_o4CUxQ3Y2wDCcjF6ftTgPU8a0TDjHTmEAX7vsSYVEFjdJ1Bam_gbgvyn0LQCFz7neIPiWNwnQfWu3BFU8D6ghhLxQy9BnlIEeV9u19BJdaxvJDAugsHTVrkV1oyCvJHKXBEN2lyjg"); background-size: cover; background-position: center;'>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[var(--soft-beige)] p-8 rounded-lg">
                        <h2 class="text-4xl font-bold tracking-tight mb-2">The Luxe Sofa</h2>
                        <div class="flex items-center mb-4">
                            <div class="flex items-center text-[var(--warm-gold)]">
                                <span class="material-symbols-outlined text-xl">star</span>
                                <span class="material-symbols-outlined text-xl">star</span>
                                <span class="material-symbols-outlined text-xl">star</span>
                                <span class="material-symbols-outlined text-xl">star</span>
                                <span class="material-symbols-outlined text-xl">star_half</span>
                            </div>
                            <a class="ml-3 text-sm font-medium text-[var(--slate-gray)] hover:text-[var(--dark-charcoal)]"
                                href="#reviews">120 reviews</a>
                        </div>
                        <p class="text-3xl font-bold mb-6">$1,499.00</p>
                        <p class="text-[var(--slate-gray)] mb-6 leading-relaxed">
                            The Luxe Sofa is a statement piece that combines comfort with contemporary design. Its plush
                            cushions and sleek lines make it perfect for any modern living
                            space. Crafted with high-quality materials, this sofa promises durability and style.
                        </p>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Color: <span class="font-normal">Midnight Blue</span>
                            </h3>
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 rounded-full bg-[#0d1b2a] border-2 border-[var(--warm-gold)] ring-2 ring-[var(--warm-gold)]"></button>
                                <button
                                    class="w-8 h-8 rounded-full bg-[#6c757d] border-2 border-transparent hover:border-gray-400"></button>
                                <button
                                    class="w-8 h-8 rounded-full bg-[#f5f1e8] border-2 border-gray-300 hover:border-gray-400"></button>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <button
                                class="flex-1 bg-[var(--emerald-green)] text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105">
                                Buy Now
                            </button>
                            <button
                                class="flex-1 border-2 border-[var(--emerald-green)] text-[var(--emerald-green)] font-bold py-3 px-6 rounded-lg hover:bg-[var(--emerald-green)] hover:text-white transition-all duration-300 transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                        <p class="text-center text-xs text-[var(--slate-gray)] mt-4">Prices and availability may vary. Visit
                            the retailer's site for the most current information.</p>
                    </div>
                </div>
                <div class="mt-16">
                    <div class="border-b border-[var(--light-gray)]">
                        <nav aria-label="Tabs" class="-mb-px flex space-x-8">
                            <a class="border-[var(--emerald-green)] text-[var(--emerald-green)] whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                href="#"> Product Details </a>
                            <a class="border-transparent text-[var(--slate-gray)] hover:text-[var(--dark-charcoal)] hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                href="#"> Customer Reviews </a>
                        </nav>
                    </div>
                    <div class="py-10">
                        <h3 class="text-2xl font-bold mb-4">Specifications</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 text-sm">
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Dimensions</span>
                                <span>85"W x 35"D x 30"H</span>
                            </div>
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Material</span>
                                <span>Velvet</span>
                            </div>
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Color</span>
                                <span>Midnight Blue</span>
                            </div>
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Assembly</span>
                                <span>Partial Assembly Required</span>
                            </div>
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Warranty</span>
                                <span>1 Year Limited</span>
                            </div>
                            <div class="grid grid-cols-2">
                                <span class="font-semibold text-[var(--slate-gray)]">Care</span>
                                <span>Spot Clean Only</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-10 border-t border-[var(--light-gray)]" id="reviews">
                        <h3 class="text-2xl font-bold mb-6">Customer Reviews</h3>
                        <div class="flex flex-col lg:flex-row gap-8">
                            <div class="w-full lg:w-1/3">
                                <div class="bg-[var(--soft-beige)] p-6 rounded-lg flex flex-col items-center">
                                    <p class="text-5xl font-black text-[var(--dark-charcoal)]">4.5</p>
                                    <div class="flex gap-0.5 my-2 text-[var(--warm-gold)]">
                                        <span class="material-symbols-outlined">star</span>
                                        <span class="material-symbols-outlined">star</span>
                                        <span class="material-symbols-outlined">star</span>
                                        <span class="material-symbols-outlined">star</span>
                                        <span class="material-symbols-outlined">star_half</span>
                                    </div>
                                    <p class="text-[var(--slate-gray)] text-sm">Based on 120 reviews</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 space-y-2">
                                <div class="flex items-center gap-2"><span class="text-sm w-4">5</span>
                                    <div class="w-full bg-[var(--light-gray)] rounded-full h-2.5">
                                        <div class="bg-[var(--warm-gold)] h-2.5 rounded-full" style="width: 40%"></div>
                                    </div><span class="text-sm text-[var(--slate-gray)] w-8 text-right">40%</span>
                                </div>
                                <div class="flex items-center gap-2"><span class="text-sm w-4">4</span>
                                    <div class="w-full bg-[var(--light-gray)] rounded-full h-2.5">
                                        <div class="bg-[var(--warm-gold)] h-2.5 rounded-full" style="width: 30%"></div>
                                    </div><span class="text-sm text-[var(--slate-gray)] w-8 text-right">30%</span>
                                </div>
                                <div class="flex items-center gap-2"><span class="text-sm w-4">3</span>
                                    <div class="w-full bg-[var(--light-gray)] rounded-full h-2.5">
                                        <div class="bg-[var(--warm-gold)] h-2.5 rounded-full" style="width: 15%"></div>
                                    </div><span class="text-sm text-[var(--slate-gray)] w-8 text-right">15%</span>
                                </div>
                                <div class="flex items-center gap-2"><span class="text-sm w-4">2</span>
                                    <div class="w-full bg-[var(--light-gray)] rounded-full h-2.5">
                                        <div class="bg-[var(--warm-gold)] h-2.5 rounded-full" style="width: 10%"></div>
                                    </div><span class="text-sm text-[var(--slate-gray)] w-8 text-right">10%</span>
                                </div>
                                <div class="flex items-center gap-2"><span class="text-sm w-4">1</span>
                                    <div class="w-full bg-[var(--light-gray)] rounded-full h-2.5">
                                        <div class="bg-[var(--warm-gold)] h-2.5 rounded-full" style="width: 5%"></div>
                                    </div><span class="text-sm text-[var(--slate-gray)] w-8 text-right">5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 space-y-8">
                            <div class="border-t border-[var(--light-gray)] pt-8">
                                <div class="flex items-start gap-4">
                                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAJ7Q3ke0hRRRB2IsWLPunwsCE1C0azE63_QSRJHR4T2djjmPYN4EfRcGRdDjnUscDR7nLKLHfq0ukgv8oZrH-cEou_GVtfXk_Gpf9xGILHxzEyQq03RTGtpasx-RE6KY78yo6aSCa7p28PmnNev9dXCBvF1eEY7VbIOmYihWMN7c6yPak_bY5lS8KdFvihv1E4ZBE5csvSIKotXpcxz0CYmNreMlzVPBdex_O-FxnvVucDQ2zH-CwJ0drG5ng1gwVVSNVmzGQB7Q");'>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="font-semibold">Sophia Bennett</p>
                                                <p class="text-xs text-[var(--slate-gray)]">2 months ago</p>
                                            </div>
                                            <div class="flex text-[var(--warm-gold)]">
                                                <span class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-sm text-[var(--slate-gray)]">Absolutely love this sofa! It's
                                            incredibly comfortable and looks stunning in my living room. The velvet material
                                            is soft and luxurious, and the color is exactly as pictured.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-[var(--light-gray)] pt-8">
                                <div class="flex items-start gap-4">
                                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDu9Rek3RYWrCj9hcClbs874HgKHeQkWhhb7SFqYLqFbyjaB0kZ7IBuNsVKtlCx8b2YXCy95dUdo6PMQA9zn0kq3AZvG47APc5ZSieUeV-ujvY_vKl-4KIBE3oAcR1lsYtTho3lJwrnMLBvQgrS-P1BFzKCHgEbs1zbjlC1l6rt0PyTxUOALYDjt5knCOdUvVJ83W-b1K6ommtyPTtaF6rOV6kil-K2aV1B7SZw3XmV-WuWdEVm9vY43X9ef05ogw1w-QDIBynrg7I");'>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="font-semibold">Ethan Carter</p>
                                                <p class="text-xs text-[var(--slate-gray)]">3 months ago</p>
                                            </div>
                                            <div class="flex text-[var(--warm-gold)]">
                                                <span class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base">star</span><span
                                                    class="material-symbols-outlined text-base text-gray-300">star</span>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-sm text-[var(--slate-gray)]">The sofa is beautiful and
                                            well-made. It was a bit tricky to assemble, but the instructions were clear. The
                                            cushions are firm but comfortable, and the overall design is very stylish.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection