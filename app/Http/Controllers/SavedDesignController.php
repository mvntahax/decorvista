<?php

namespace App\Http\Controllers;

use App\Models\SavedDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedDesignController extends Controller
{
    // Show all saved designs for the logged-in user
    public function index()
    {
        $savedDesigns = SavedDesign::where('user_id', auth()->id())
            ->with('design')
            ->get();

        return view("users.saved-designs", compact("savedDesigns"));
    }

    // Save or unsave a design (toggle behavior)
    public function store($designId)
    {
        $userId = auth()->id();

        $existing = SavedDesign::where('user_id', $userId)
            ->where('design_id', $designId)
            ->first();

        if ($existing) {
            // If already saved, remove it
            $existing->delete();
            return back()->with('success', 'Design removed successfully!');
        } else {
            // Otherwise, save the design
            SavedDesign::create([
                'user_id' => $userId,
                'design_id' => $designId,
            ]);
        }

        return back()->with('success', 'Design saved successfully!');
    }

    // Delete a saved design by its ID
    public function destroy($id)
    {
        $savedDesigns = SavedDesign::where('user_id', auth()->id())
            ->where('id', $id)
            ->first();

        if ($savedDesigns) {
            $savedDesigns->delete();
        }

        return redirect()->route('users.saved-designs')->with('success', 'Design removed successfully!');
    }
}
