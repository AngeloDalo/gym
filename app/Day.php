<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
