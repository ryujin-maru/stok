<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

Class ImageService 
{
    public static function upload($image,$file) 
    {
        // 画像の名前をランダムに作成
        $image_ex = $image->extension();
        $random = uniqid();
        $filename = $random.'.'.$image_ex;

        // Storage/topにリサイズし画像をアップロード
        $resize = InterventionImage::make($image)->resize(1920, 1080)->encode();
        Storage::put('public/'. $file .'/'.$filename,$resize);

        return $filename;
    }
}