@extends('layouts.app')

@section('content')
  <main class="flex-1 px-4 py-10 sm:px-6 lg:px-8 bg-[var(--ivory)]">
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
      @if ($carts->count() > 0)
        <div class="mb-12 text-center">
          <h2 class="text-4xl font-extrabold tracking-tighter text-[var(--charcoal)]">Shopping Cart</h2>
          <p class="mt-2 text-[var(--slate-gray)]">Everything you love, collected in one place for checkout.</p>
        </div>
        <section class="mb-12">
          <h3 class="mb-6 border-b-2 border-[var(--light-gray)] pb-3 text-2xl font-bold text-[var(--charcoal)]">
            Your Shopping Cart
          </h3>

          <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            <!-- Cart Items -->
            @php
              $grandTotal = 0;
              $shipping = 100.00;
              $tax = 50.00;
            @endphp

            <div class="lg:col-span-2 space-y-6">
              <!-- Table Header -->
              <div class="rounded-md bg-[var(--beige)] p-4 shadow-sm">
                <div class="grid grid-cols-12 items-center gap-4 text-left font-semibold text-[var(--charcoal)]">
                  <div class="col-span-6">Product</div>
                  <div class="col-span-2 text-center">Price</div>
                  <div class="col-span-2 text-center">Quantity</div>
                  <div class="col-span-1 text-center">Total</div>
                  <div class="col-span-1"></div>
                </div>
              </div>

              @foreach ($carts as $cart)
                @php
                  $subtotal = $cart->quantity * $cart->product->price;
                  $grandTotal += $subtotal;
                @endphp
                <!-- Cart Item -->
                <div class="rounded-md bg-[var(--white)] p-4 shadow-sm border border-[var(--light-gray)]">
                  <div class="grid grid-cols-12 items-center gap-4">
                    <!-- Product Info -->
                    <div class="col-span-6 flex items-center gap-4">
                      <div class="h-24 w-24 flex-shrink-0 rounded-md bg-cover bg-center"
                        style='background-image: url({{ asset('images/' . $cart->product->image) }});'>
                      </div>
                      <div>
                        <p class="font-semibold text-[var(--charcoal)]">{{ $cart->product->name }}</p>
                        <p class="text-sm text-[var(--slate-gray)]">Color: Ivory</p>
                      </div>
                    </div>

                    <!-- Price -->
                    <div class="col-span-2 text-center font-medium text-[var(--charcoal)]">
                      ${{ $cart->product->price }}
                    </div>

                    <!-- Quantity -->
                    <div
                      class="col-span-2 flex justify-center bg-[var(--ivory)] rounded-md border border-[var(--light-gray)]">
                      <form action="{{ route('users.cart.update', $cart->id) }}" method="POST" class="flex items-center">
                        @csrf
                        @method('PATCH')

                        <!-- Minus button -->
                        <button type="submit" name="action" value="decrement"
                          class="px-3 py-1 text-[var(--slate-gray)]">-</button>

                        <!-- Input box -->
                        <input type="text" name="quantity" value="{{ $cart->quantity }}"
                          class="w-12 border-x border-[var(--light-gray)] bg-[var(--beige)] text-center text-[var(--charcoal)]" />

                        <!-- Plus button -->
                        <button type="submit" name="action" value="increment"
                          class="px-3 py-1 text-[var(--slate-gray)]">+</button>
                      </form>
                    </div>

                    <!-- Total -->
                    <div class="col-span-1 text-center font-semibold text-[var(--charcoal)]">
                      ${{ number_format($subtotal, 2) }}
                    </div>

                    <!-- Delete -->
                    <div class="col-span-1 text-center">
                      <form action="{{ route('users.cart.destroy', $cart->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-[var(--slate-gray)] hover:text-red-500">
                          <span class="material-symbols-outlined">delete</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <!-- Order Summary -->
            <div class="space-y-8">
              <section class="rounded-md bg-[var(--beige)] p-6 shadow-md">
                <h3 class="mb-6 text-2xl font-semibold text-[var(--charcoal)]">Order Summary</h3>
                <div class="space-y-4">
                  <div class="flex justify-between text-[var(--slate-gray)]">
                    <span>Subtotal</span>
                    <span class="font-medium text-[var(--charcoal)]">${{ number_format($grandTotal, 2) }}</span>
                  </div>
                  <div class="flex justify-between text-[var(--slate-gray)]">
                    <span>Shipping</span>
                    <span class="font-medium text-[var(--charcoal)]">${{ number_format($shipping, 2) }}</span>
                  </div>
                  <div class="flex justify-between text-[var(--slate-gray)]">
                    <span>Tax</span>
                    <span class="font-medium text-[var(--charcoal)]">${{ number_format($tax, 2) }}</span>
                  </div>
                  <div class="mt-4 border-t border-[var(--light-gray)] pt-4">
                    <div class="flex justify-between text-lg font-bold text-[var(--charcoal)]">
                      <span>Total</span>
                      <span>${{ number_format($grandTotal + $shipping + $tax, 2) }}</span>
                    </div>
                  </div>
                </div>
                <div class="mt-8">
                  <button
                    class="w-full rounded-md bg-[var(--midnight)] py-3 text-lg font-bold text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition-transform">
                    Proceed to Checkout
                  </button>
                </div>
              </section>
            </div>
          </div>
        </section>
      @else
        <!-- Empty Cart -->
        <div class="flex flex-col items-center justify-center py-20">
          <span class="material-symbols-outlined text-[var(--slate-gray)] text-7xl mb-4">shopping_cart</span>
          <h2 class="text-2xl font-bold text-[var(--charcoal)] mb-2">Your cart is empty</h2>
          <p class="text-[var(--slate-gray)] mb-6">Looks like you haven’t added anything yet.</p>
          <a href="{{ route('products') }}"
            class="rounded-md bg-[var(--midnight)] py-2 px-4 font-semibold text-[var(--ivory)] hover:bg-[var(--hover-gray)] transition">
            Continue Shopping
          </a>
        </div>
      @endif
    </div>
  </main>
@endsection