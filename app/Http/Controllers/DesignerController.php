<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\DesignCategory;
use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    // Show a designer's profile and their designs
    public function show($username)
    {
        $categories = DesignCategory::all();

        $designer = Designer::with(['designs.category'])
            ->where('username', $username)
            ->firstOrFail();

        return view('designer-detail', [
            'designs' => $designer->designs,
            'designer' => $designer,
            'categories' => $categories,
        ]);
    }
}
