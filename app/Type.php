<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function tips(){
        return $this->belongsToMany('App\Tip');
        
           }
}
