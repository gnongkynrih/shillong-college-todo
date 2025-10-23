<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //all mass insert except for id
    protected $guarded = ['id'];
}
