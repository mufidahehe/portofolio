<?php

namespace App\Http\Controllers;

use App\Models\Message; 
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validatedData);

        return redirect()->route('home')
                         ->with('success', 'Pesan Anda telah berhasil terkirim! Terima kasih.');
    }

   
    public function index()
    {
        $messages = Message::latest()->get(); 
        return view('admin.messages.index', compact('messages'));
    }
}