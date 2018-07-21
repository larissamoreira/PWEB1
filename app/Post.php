<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';

    public function themes() {
        return $this->belongsToMany('App\Theme');
    }
}