<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Address extends Model
{
    public $timestamps = false;
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $fillable = ['postcode','region','country'];

    public function add_address(Address $addr, $postcode, $region, $country){
        $addr->postcode=$postcode;
        $addr->region=$region;
        $addr->country=$country;
        $res = $addr->save();
        return $res;
    }

    public function update_address(Address $addr, $id, $postcode, $region, $country){
        $data['postcode']=$postcode;
        $data['region']=$region;
        $data['country']=$country;
        $res=$addr->where("id", $id)->update($data);
        return $res;
    }

    public function view_address($postcode){
        $res = DB::table($this->table)
        ->where('postcode', $postcode)
        ->first();
        return $res;
    }
}
