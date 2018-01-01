<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataupload extends Model
{
    public $timestamps = fales;
    protected $table = 'dataupload';
    protected $primaryKey = 'dataupload_id';
    protected $fillable = ['file'];
}
