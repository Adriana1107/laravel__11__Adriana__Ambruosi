<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;
use Exception;


class PublicController extends Controller
{
     public function welcome(){
        return view('welcome');
    }


 public function create()
    {
        return view('components.contactUs');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'user' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        $userData = $request->only(['user', 'email', 'message']);
 return redirect()->route('contactUs.create')->with('success', 'Messaggio inviato con successo!');
    }

    public function profile(){
        return view ('profile');
    }


}
