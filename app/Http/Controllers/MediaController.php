<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class MediaController extends Controller
{
    public function index(Request $request) {
        if($request->sort == 'interview') {
            $articles = Media::where('type',1)->orderBy('created_at','desc')->get();
        }elseif($request->sort == 'report'){
            $articles = Media::where('type',2)->orderBy('created_at','desc')->get();
        }else{
            $articles = Media::orderBy('created_at','desc')->get();
        }


        SEOTools::setTitle('記事一覧 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の記事一覧ページでは、株式会社Stokの最新のニュース、インタビューなどをチェックできます。興味のある記事を見つけて、詳細をお楽しみください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset('logo_img.png'));

        return view('interview.index',compact('articles'));
    }

    public function detail($id) {
        $article = Media::where('id',$id)->with(['chat','chat.speaker'])->firstOrFail();
        $articles = Media::orderBy('created_at','desc')->get();

        // foreach($article->chat as $item) {
        //     dd($item->speaker->image);
        // }
        SEOTools::setTitle( $article->title .' | 株式会社Stok');
        SEOTools::setDescription($article->description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage(asset("storage/top/".$article->image));

        return view('interview.detail',compact(['article','articles']));
    }
}
