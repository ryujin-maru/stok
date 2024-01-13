<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request) {
        SEOTools::setDescription('株式会社STOKは通信事業やイベント事業などを展開するスタートアップ企業です。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.index');
    }
    public function company() {
        SEOTools::setDescription('下川巧記によって2023年01月31日に設立された人材派遣会社、株式会社STOKの会社概要です。');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        return view('stok.company');
    }
    public function recruit() {
        SEOTools::setDescription('株式会社STOKで共に働く仲間を募集しています。20代、30代が多いとても若い会社です。');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        return view('stok.recruit');
    }
    public function products() {
        SEOTools::setDescription('通信事業、イベント事業を中心に営業代行やイベント運営など様々な事業を展開しています。');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        return view('stok.products');
    }
    public function greet() {
        SEOTools::setDescription('株式会社STOK下川巧記による代表挨拶です。');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        return view('stok.greet');
    }
}
