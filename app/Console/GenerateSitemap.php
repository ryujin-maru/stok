<?php  
namespace App\Console;  

use Illuminate\Console\Command;  
use Spatie\Sitemap\SitemapGenerator;  

class GenerateSitemap extends Command  
{  
   protected $signature = 'sitemap:generate';  
   protected $description = 'サイトマップの生成を行う';  

   public function handle()  
   {  
       SitemapGenerator::create(config('app.url'))  
           ->writeToFile(public_path('sitemap.xml'));  
   }  
}