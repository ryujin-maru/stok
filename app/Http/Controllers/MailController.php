<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function show() {
        return view('stok.mail');
    }

    public function sendMail(Request $request) {
        $request->validate([
            'name' => 'required|string|max:20',
            'mail' => 'required',
            'phone' => 'required|nullable|regex:/^0(\d-?\d{4}|\d{2}-?\d{3}|\d{3}-?\d{2}|\d{4}-?\d|\d0-?\d{4})-?\d{4}$/',
            'text' => 'required|max:2000'
        ]);
    }
}
