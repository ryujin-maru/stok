<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

Class ImageService 
{
    public static function upload($image) 
    {
        $image_ex = $image->extension();
        $random = uniqid();
        $filename = $random.'.'.$image_ex;

        $resize = InterventionImage::make($image)->resize(1920, 1080)->encode();
        Storage::put('public/top/'.$filename,$resize);

        return $filename;
    }
}