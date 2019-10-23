<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'image'];
    public function projects() {
        return $this->belongsToMany('App\Project');
    }
}
