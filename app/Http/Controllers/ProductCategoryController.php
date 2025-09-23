<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    // Show all product categories
    public function index()
    {
        $categories = ProductCategory::all();
        return view('products', compact('categories'));
    }
}
