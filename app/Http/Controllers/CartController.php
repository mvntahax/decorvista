<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show all cart items for the logged-in user
    public function index()
    {
        $carts = Cart::with('product')
            ->where('user_id', auth()->id())->get();

        return view("users.cart", compact("carts"));
    }

    // Add a product to the cart or remove it if it already exists
    public function store($productId)
    {
        $userId = auth()->id();

        $existing = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($existing) {
            // If item already in cart, remove it (toggle behavior)
            $existing->delete();
            return back()->with('success', 'Item removed successfully!');
        } else {
            // Otherwise, add item to the cart
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
        }

        return back()->with('success', 'Item added successfully!');
    }

    // Update quantity of a specific cart item
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($request->action === 'increment') {
            $cart->quantity += 1; // Increase by one
        } elseif ($request->action === 'decrement') {
            $cart->quantity = max(1, $cart->quantity - 1); // Decrease but never below 1
        } else {
            // If user manually types quantity in input
            $cart->quantity = max(1, (int) $request->quantity);
        }

        $cart->save();

        return back()->with('success', 'Cart updated Successfully!');
    }

    // Remove a specific item from the cart
    public function destroy($id)
    {
        $cart = Cart::where('user_id', auth()->id())->where('id', $id)->first();

        if ($cart) {
            $cart->delete();
        }

        return redirect()->route('users.cart')->with('success', 'Item removed successfully!');
    }
}
