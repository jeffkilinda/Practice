<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function tips(){
        return $this->belongsToMany('App\Tip');
        
           }
}
