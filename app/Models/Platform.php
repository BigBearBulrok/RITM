<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    //
    protected $guarded = ['id'];

    public function icon() {
        return $this->hasOne(Icon::class, 'id', 'icon_id');
    }
}
