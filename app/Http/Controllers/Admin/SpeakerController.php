<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use App\Services\ImageService;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::orderBy('updated_at','DESC')->get();
        return view('admin.speaker.index',compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speaker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string', 'max:50'],
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if(!is_null($request->image)) {
            $fileName = ImageService::upload($request->image,'speakers');
        }

        Speaker::create([
            'name' => $request->name,
            'image' => $fileName,
        ]);

        return to_route('speaker.index')->with('message','作成しました');
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
        $speaker = Speaker::findOrFail($id);
        return view('admin.speaker.edit',compact('speaker'));
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
        $request->validate([
            'name' => ['required','string', 'max:50'],
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $speaker = Speaker::findOrFail($id);
        if(!is_null($request->image)) {
            $fileName = ImageService::upload($request->image,'speakers');
            $speaker->image = $fileName;
        }
        $speaker->name = $request->name;
        $speaker->save();

        return to_route('speaker.index')->with('message','更新しました');
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
