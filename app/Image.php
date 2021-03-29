<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'uploads';
    protected $primaryKey = 'imgid';
}
