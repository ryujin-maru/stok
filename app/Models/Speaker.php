<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'created_at',
        'updated_at',
    ];

    public function chat() {
        return $this->hasMany(Chat::class);
    }
}

