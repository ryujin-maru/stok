<?php  
namespace App\Console;

use App\Models\Media;
use Illuminate\Console\Command;  
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command  
{  
   protected $signature = 'sitemap:generate';  
   protected $description = 'サイトマップの生成を行う';  

   public function handle()  
   {  
        $pages = Media::orderBy('created_at','desc')->get();
        $sitemap = Sitemap::create();

        // Topページ
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
            ->setPriority(1.0));

        // 会社概要ページ
        $sitemap->add(Url::create('/company')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
            ->setPriority(1.0));

        // recruitページ
        $sitemap->add(Url::create('/recruit')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
            ->setPriority(1.0));

        // productsページ
        $sitemap->add(Url::create('/products')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
            ->setPriority(1.0));

        // contactページ
        $sitemap->add(Url::create('/contact')
        ->setLastModificationDate(now())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        ->setPriority(1.0));

        // greetページ
        $sitemap->add(Url::create('/greet')
        ->setLastModificationDate(now())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        ->setPriority(1.0));

        //記事ページ
        foreach($pages as $page) {
            if($page->is_publish == 1) {
                $sitemap->add(Url::create('/media/'.$page->id)
                ->setLastModificationDate(new Carbon($page->updated_at))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
                ->setPriority(0.9));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
   }  
}