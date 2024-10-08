<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'alt',
        'image',
        'description',
        'type',
        'information',
        'is_publish',
        'created_at',
        'updated_at',
    ];
    public function chat() {
        return $this->hasMany(Chat::class);
    }
}
