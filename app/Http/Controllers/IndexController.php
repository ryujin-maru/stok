<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request) {
        SEOTools::setTitle('株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)は、通信事業やイベント事業など、幅広い分野で展開するスタートアップ企業です。革新的なアプローチと優れたサービスで顧客の期待に応えます。最新の情報やサービスに関する詳細は、株式会社Stokの公式ウェブサイトをご覧ください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage(asset('images/logo_img.png'));
        return view('stok.index');
    }
    public function company() {
        SEOTools::setTitle('会社概要 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の会社概要ページでは、私たちの会社について詳しく説明しています。私たちは通信事業、イベント企画、様々な分野で活動しています。株式会社Stokの使命や価値観を知りたい方は、こちらをご覧ください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.company');
    }
    public function recruit() {
        SEOTools::setTitle('採用情報 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の採用情報ページでは、私たちの最新の求人情報をご紹介しています。私たちは優れた人材と一緒に働くことを歓迎し、共に成長し、イノベーションを推進しています。株式会社Stokでのキャリアに興味がある方は、こちらをご覧ください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.recruit');
    }
    public function products() {
        SEOTools::setTitle('事業紹介 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の事業内容紹介ページでは、通信事業、イベント事業を中心に営業代行やイベント運営など様々な事業についての詳細を掲載しています。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.products');
    }
    public function greet() {
        SEOTools::setTitle('代表挨拶 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の代表挨拶ページでは、代表取締役である下川巧記の会社の理念やビジョンについて詳しくご紹介します。詳しくは株式会社Stokの代表挨拶ページをご覧ください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        return view('stok.greet');
    }
}
