<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    public function services() {
        return $this->belongsToMany('App\Service');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function client() {
        return $this->hasOne('App\Client');
    }
}
