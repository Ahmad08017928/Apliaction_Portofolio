<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class Email extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);
        // dd($validatedData);
        if(!isset($validatedData['nama']) || !isset($validatedData['email']) || !isset($validatedData['pesan']))
        return redirect()->route('welcome')->withErrors('From input is missing');

        $details = [
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'pesan' => $validatedData['pesan'],
        ];
        // dd($details);

        Mail::to('ilhamadipurnomo9g@gmail.com')->send(new SendEmail($details));
        // Mail::to($validatedData['email'])->send(new SendEmail($details));
        return redirect()->route('welcome');
    }
}
