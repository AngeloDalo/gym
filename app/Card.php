<?php

namespace App;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'userd_id',
        'day_id',
        'note',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function day()
    {
        return $this->belongsTo('App\Day');
    }
}
