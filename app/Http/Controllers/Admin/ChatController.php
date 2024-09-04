<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Speaker;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // chatのDBに登録
        $id = $request->media_id;

        $request->validate([
            'speaker' => ['required'],
            'count' => ['required'],
            'text' => ['required','string','max:200'],
        ]);

        Chat::create([
            'media_id' => $id,
            'speaker_id' => $request->speaker,
            'count' => $request->count,
            'text' => $request->text,
        ]);

        return to_route('chat.edit',['chat'=>$id])->with('message','追加しました');
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
        $articles = Chat::where('media_id',$id)->orderBy('count','asc')->get();
        $speakers = Speaker::get();
        return view('admin.chat.edit',compact(['articles','speakers','id']));
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
        // バリデーション
        $request->validate([
            'count' => ['required'],
            'text' => ['required','string'],
        ]);

        // 値DBに保存
        $chat = Chat::findOrFail($id);
        $chat->count = $request->count;
        $chat->text = $request->text;
        $chat->save();

        return to_route('chat.edit',['chat'=>$chat->media_id])->with('message','更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 削除
        $chat = Chat::findOrFail($id);
        $chat->delete();

        return to_route('chat.edit',['chat'=>$chat->media_id])->with(['message'=>'削除しました','status'=>'red']);
    }
}
