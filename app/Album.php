<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $n_album_test = 10;

    protected $fillable = [
        'title',
        'artist',
        'year',
    ];

    public function songs() {
        return $this->hasMany('App\Song');
    }

    public function image() {
        return $this->hasOne('App\Image');
    }
}
