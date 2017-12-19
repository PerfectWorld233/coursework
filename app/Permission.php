<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;
    protected $table = 'permission';
    protected $primaryKey = 'permission_id';
    protected $fillable = ['permission'];
}
