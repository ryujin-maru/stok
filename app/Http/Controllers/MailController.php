<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class MailController extends Controller
{
    // お問い合わせ
    public function show() {
        SEOTools::setTitle('お問い合わせ | 株式会社Stok');
        SEOTools::setDescription('株式会社STOK(ストック)への問い合わせを受け付けています。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.mail');
    }

    public function sendMail(Request $request) {
        if($request->input('hp_field') !== '') {
            abort(404);
        }
        
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

        Mail::to('main@stok.email')->send(new SendMail($data));

        return view('mail.complete');
    }
}
