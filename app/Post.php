<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps    false will not display
    public $timestamps = true;


}
