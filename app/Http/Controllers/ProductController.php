<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products with filters, search, and sorting
    public function index(Request $request)
    {
        $query = Product::with('category');

        // Search by product name
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter by price range
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Sorting
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'price_low_high':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_high_low':
                    $query->orderBy('price', 'desc');
                    break;
            }
        } else {
            $query->orderBy('created_at', 'asc');
        }

        $cartItems = [];
        if (auth()->check()) {
            $cartItems = Cart::where('user_id', auth()->id())
                ->pluck('product_id')
                ->toArray();
        }

        $categories = ProductCategory::all();

        $products = $query->paginate(9)->withQueryString();

        return view('products', [
            'categories' => $categories,
            'products' => $products,
            'cartItems' => $cartItems,
            'search' => $request->search,
        ]);
    }

    // Show products filtered by category WITH SEARCH
    public function byCategory(Request $request, $slug)
    {
        $categories = ProductCategory::all();
        $category = ProductCategory::where('slug', $slug)->firstOrFail();

        $query = Product::with('category')
            ->where('category_id', $category->id);

        // Add search here
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(9)->withQueryString();

        $cartItems = [];
        if (auth()->check()) {
            $cartItems = Cart::where('user_id', auth()->id())
                ->pluck('product_id')
                ->toArray();
        }

        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'category' => $category,
            'cartItems' => $cartItems,
            'search' => $request->search,
        ]);
    }
}
