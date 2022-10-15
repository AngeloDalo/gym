<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'type',
        'sum',
        'created_at',
        'updated_at',
    ];

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
