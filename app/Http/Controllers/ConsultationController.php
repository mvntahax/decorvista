<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Designer;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    // Show all consultations for the logged-in user
    public function index()
    {
        $consultation = Consultation::with('designer')->where('user_id', auth()->id())->latest();
        $consultations = Consultation::with('designer')->where('user_id', auth()->id())->get();
        return view('users.consultations', [
            'consultations' => $consultations,
            'consultation' => $consultation,
        ]);
    }

    // Show booking form for a specific designer
    public function create($username)
    {
        $designer = Designer::where('username', $username)->firstOrFail();
        return view('book-consultation', compact('designer'));
    }

    // Store a new consultation booking
    public function store(Request $request)
    {
        $request->validate([
            'designer_id' => 'required|exists:designers,id',
            'scheduled_datetime' => 'required|date|after:now',
            'purpose' => 'required|string|max:50|regex:/^[A-Za-z0-9\s]+$/',
            'notes' => 'nullable|string|max:1000',
        ]);

        Consultation::create([
            'user_id' => auth()->id(),
            'designer_id' => $request->designer_id,
            'scheduled_datetime' => $request->scheduled_datetime,
            'purpose' => $request->purpose,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('users.consultations')->with('success', 'Consultation booked successfully.');
    }

    // Delete a consultation (only for the logged-in user)
    public function destroy($id)
    {
        $consultation = Consultation::where('user_id', auth()->id())->where('id', $id)->first();

        if ($consultation) {
            $consultation->delete();
        }

        return redirect()->route('users.consultations')->with('success', 'Consultation removed from your consultations.');
    }
}
