<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Organisation extends Model
{
    // public $timestamps = false;
    protected $table = 'organisation';
    protected $primaryKey = 'id';
    protected $fillable = [
            'name',
            'orgType',
            'interestSectorAreas',
            'twitter',
            'schoolLowerAge',
            'schoolHigherAge',
            'schoolURN',
            'notes'
    ];

    public function view_name(){
        $res = DB::select('select name from '. $this->table, []);
        return $res;
    }
}
