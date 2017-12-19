<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;
    protected $table = 'address';
    protected $primaryKey = 'address_id';
    protected $fillable = ['postcode','region','country'];
}
