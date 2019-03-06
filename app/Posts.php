<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    
    //table name
    protected $table = 'posts';

    //primary key

    public $primarykey = 'id';

    //time stamp
    public $timestamp ='true';
}
