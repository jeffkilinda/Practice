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
}
