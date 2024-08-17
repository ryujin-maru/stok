<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    public function index()
    {
        // $pages = Media::get()->orderBy('created_at','desc');
        // $sitemap = Sitemap::create();

        // Topページ
        // $sitemap->add(Url::create('/')
        //     ->setLastModificationDate(now())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     ->setPriority(1.0));

        // // 会社概要ページ
        // $sitemap->add(Url::create('/company')
        //     ->setLastModificationDate(now())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     ->setPriority(1.0));

        // // recruitページ
        // $sitemap->add(Url::create('/recruit')
        //     ->setLastModificationDate(now())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     ->setPriority(1.0));

        // // productsページ
        // $sitemap->add(Url::create('/products')
        //     ->setLastModificationDate(now())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     ->setPriority(1.0));

        // // contactページ
        // $sitemap->add(Url::create('/contact')
        // ->setLastModificationDate(now())
        // ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        // ->setPriority(1.0));

        // // greetページ
        // $sitemap->add(Url::create('/greet')
        // ->setLastModificationDate(now())
        // ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        // ->setPriority(1.0));

        // $sitemap->add(Url::create('/sergserges')
        // ->setLastModificationDate(now())
        // ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        // ->setPriority(1.0));

        //記事ページ
        // foreach($pages as $page) {
        //     $sitemap->add(Url::create('/'.$page->id)
        //     ->setLastModificationDate(new Carbon($page->updated_at))
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     ->setPriority(0.9));
        // }
        

        // xmlを表示
        // return redirect('/sitemap.xml');
        
    }

}