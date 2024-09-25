<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Speaker;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Media::orderBy('created_at','desc')->get();
        return view('admin.media.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mediaの新規作成
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 詳細画面へ
        $article =  Media::where('id',$id)->firstOrFail();
        return view('admin.media.edit',compact(['article']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article =  Media::where('id',$id)->firstOrFail();

        // バリデーション
        $request->validate([
            'title' => ['required','string', 'max:50'],
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'alt' => ['string','max:50'],
            'description' => ['string','max:50']
        ]);

        // 画像を保存し、データ登録
        try {
            DB::transaction(function() use($request,$article) {
                $image = $request->image;
                if(!is_null($image)) {
                    $imageName = ImageService::upload($image);
                    $article->image = $imageName;
                }
    
                $article->title = $request->title;
                $article->alt = $request->alt;
                $article->description = $request->description;
                $article->type = $request->type;
                $article->information = $request->information;
                $article->is_publish = $request->is_publish;
                $article->save();
            });
        }catch(Throwable $e) {
            throw $e;
        }
        
        return to_route('media.index')->with('message','更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
