<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointementController extends Controller
{
    public function index()
    {
        return view("contact");
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            "telefone_number" => 'required',
            'appointment_reason' => 'required|string|max:255',
            'bericht' => 'required|string',
        ]);
        Appointment::create($request->all());
        return back()->with('success', 'Bericht succesvol verzonden!');
    }
}
