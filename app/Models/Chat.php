<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function speaker() {
        return $this->belongsTo(Speaker::class);
    }

    public function media() {
        return $this->belongsTo(Media::class);
    }
}
