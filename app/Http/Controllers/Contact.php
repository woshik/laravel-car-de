<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function view()
    {
        return view('contact', ['page' => 'contact']);
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:80',
            'email' => 'required|email:rfc,dns,strict,filter',
            'telephone' => 'required|max:20',
            'address' => 'required|string|max:100',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $validated['ip'] = $request->ip();
        
        $mail = 'info@folientechnik-schweiz.ch';

        Mail::to($validated['email'])->send(new ContactEmail());
        Mail::to($mail)->send(new AdminMail($validated));

        if (Mail::failures()) {
            return response()->json([
                'errors' => [
                    'mailer' => ['Mail not sent, try again later'],
                ],
            ], 500);
        }

        return response()->json([
            'success' => 'Email Successfully Sent'
        ], 200);
    }
}
