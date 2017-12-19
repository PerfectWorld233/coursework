<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = fales;
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $fillable = ['role'];
    
    public function users(){
        return $this->hasMany('App\User','role_id','id');
    }
}
