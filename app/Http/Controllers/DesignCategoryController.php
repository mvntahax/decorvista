<?php

namespace App\Http\Controllers;

use App\Models\DesignCategory;
use Illuminate\Http\Request;

class DesignCategoryController extends Controller
{
    // Show all design categories
    public function index()
    {
        $categories = DesignCategory::all();
        return view('designs', compact('categories'));
    }
}
