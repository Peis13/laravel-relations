<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'nationality',
        'date_of_birth',
    ];

    public function albums() {
        return $this->belongsToMany('App\Album');
    }
}
