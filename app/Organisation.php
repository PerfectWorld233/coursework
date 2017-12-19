<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public $timestamps = false;
    protected $table = 'organisation';
    protected $primaryKey = 'organisation_id';
    protected $fillable = ['name','orgType','interestSectorAreas','twitter','schoolLowerAge','schoolHigherAge','schoolURN','notes','address_id'];
}
