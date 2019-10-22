<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    //Table Name
    protected $table = 'tips';

    //Primarykey
    public $primarykey = 'id';

    //Timestamps
    public $timestamps = true;

    public function prediction(){
        return $this->belongsTo('App\Prediction');
        
           }

           public function status(){
            return $this->belongsTo('App\Status');
            
               }

               public function type(){
                return $this->belongsTo('App\Type');
                
                   }
}
