<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'cover',
        'album_id',
    ];

    public function album() {
        return $this->belongsTo('App\Album');
    }
}
