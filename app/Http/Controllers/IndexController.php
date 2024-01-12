<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request) {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::setTitle('Home');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));
        // $posts = Post::all();
        return view('stok.index');
    }
    public function company() {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');

        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        // $posts = Post::all();
        return view('stok.index');
    }
    public function recruit() {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        // $posts = Post::all()
        return view('stok.index');
    }
    public function products() {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        // $posts = Post::all();
        return view('stok.index');
    }
    public function contact() {
        // SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        // $posts = Post::all();
        return view('stok.index');
    }
}
