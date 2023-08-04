<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function show() {
        return view('stok.mail');
    }

    public function sendMail(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'mail' => 'required|email',
            'phone' => 'required|nullable|max:10|min:7|regex:/^[0-9-]+$/',
            'text' => 'required|max:2000'
        ],
        [
            'phone.regex' => '電話番号の形式で入力してください'
        ]
    );

        Mail::to('juktwmh@gmail.com')->send(new SendMail($data));

        return view('mail.complete');
    }
}
