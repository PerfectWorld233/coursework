<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'id';
    //表名不加s 
    protected $table = 'report';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'new', 'del','up', 'sub','entry_time'
    ];
    

    public function add_report(Report $report, $new, $up, $del, $mid){
        $report->new=$new;
        $report->del=$del;
        $report->new=$new;
        $report->up=$up;
        $report->entry_time = date('Y-m-d H:i:s');
        $report->mid=$mid;
        $res = $report->save();
        return $res;
    }

    // public function update_user(Report $report, $id, $new,$del,$up,$mid){
    //     $data['new']=$new;
    //     $data['del']=$del;
    //     $data['new']=$new;
    //     $data['up']=$up;
    //     $res=$report->where("id", $id)->update($data);
    //     $report->mid=$mid;
    //     return $res;
    // }
}
