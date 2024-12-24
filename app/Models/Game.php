<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
        'thumbnail' => 'array',
        'hero' => 'array',
    ];

    public function platforms()
    {
        return $this->hasMany(Platform::class, 'game_id', 'id');
    }
}
