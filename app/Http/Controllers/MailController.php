<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class MailController extends Controller
{
    public function show() {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('株式会社STOKへの問い合わせを受け付けています。');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        return view('stok.mail');
    }

    public function sendMail(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'mail' => 'required|email',
            'phone' => 'required|nullable|max:12|min:7|regex:/^[0-9-]+$/',
            'text' => 'required|max:2000',
            'status' => ''
            ],
            [
                'phone.regex' => '電話番号の形式で入力してください'
            ]
        );

        Mail::to('juktwmh@gmail.com')->send(new SendMail($data));

        return view('mail.complete');
    }
}
