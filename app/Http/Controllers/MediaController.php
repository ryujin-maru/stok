<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class MediaController extends Controller
{
    public function index(Request $request) {
        if($request->sort == 'interview') {
            $articles = Media::where('type',1)->where('is_publish',1)->orderBy('created_at','desc')->paginate(6);
        }elseif($request->sort == 'report'){
            $articles = Media::where('type',2)->where('is_publish',1)->orderBy('created_at','desc')->paginate(6);
        }else{
            $articles = Media::orderBy('created_at','desc')->where('is_publish',1)->paginate(6);
        }


        SEOTools::setTitle('記事一覧 | 株式会社Stok');
        SEOTools::setDescription('株式会社Stok(ストック)の記事一覧ページでは、株式会社Stokの最新のニュース、インタビューなどをチェックできます。興味のある記事を見つけて、詳細をお楽しみください。');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');

        return view('interview.index',compact('articles'));
    }

    public function detail($id) {
        $article = Media::where('id',$id)->where('is_publish',1)->with(['chat','chat.speaker'])->firstOrFail();
        $articles = Media::orderBy('created_at','desc')->where('is_publish',1)->get();

        // foreach($article->chat as $item) {
        //     dd($item->speaker->image);
        // }
        SEOTools::setTitle( $article->title .' | 株式会社Stok');
        SEOTools::setDescription($article->description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');

        return view('interview.detail',compact(['article','articles']));
    }
}
