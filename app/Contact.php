<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    protected $table = 'contact';
    protected $primaryKey = 'contact_id';
    protected $fillable = ['recordType','recordStatus','email','instruction','title','fname','lname','jobtitle','personType','twitter','linkedIn','professionalInterest','professionalWeb','telephone','telephone2','mobile','organisation','departmentLevel1','departmentLevel2','biographyText','notes','address_id'];
}
