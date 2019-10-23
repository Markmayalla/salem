<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = ['name', 'logo'];
    
    public function projects() {
        return $this->hasMany('App\Project');
    }
}
