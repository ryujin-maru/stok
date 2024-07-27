<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class MediaController extends Controller
{
    public function index() {
        SEOTools::setTitle('記事一覧 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の会社概要ページでは、私たちの会社について詳しく説明しています。私たちは通信事業、イベント企画、様々な分野で活動しています。株式会社Stokの使命や価値観を知りたい方は、こちらをご覧ください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));

        return view('media.index');
    }

    public function detail($id) {
        return view('media.detail');
    }
}
