<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\DesignCategory;
use App\Models\SavedDesign;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    // Show all designs and categories
    public function index()
    {
        $categories = DesignCategory::all();
        $designs = Design::with('category')->get();
        $savedDesigns = SavedDesign::where('user_id', auth()->id())->pluck('design_id')->toArray();

        return view('designs', [
            'designs' => $designs,
            'categories' => $categories,
            'category' => null,
            'savedDesigns' => $savedDesigns
        ]);
    }

    // Show designs filtered by a specific category slug
    public function byCategory($slug)
    {
        $categories = DesignCategory::all();
        $category = DesignCategory::where('slug', $slug)->firstOrFail();

        $designs = Design::with('category')
            ->where('category_id', $category->id)
            ->get();
        $savedDesigns = SavedDesign::where('user_id', auth()->id())->pluck('design_id')->toArray();

        return view('designs', [
            'designs' => $designs,
            'categories' => $categories,
            'category' => $category,
            'savedDesigns' => $savedDesigns
        ]);
    }
}
