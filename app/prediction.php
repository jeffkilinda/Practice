<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
   public function tips(){
return $this->belongsToMany('App\Tip');

   }
}
