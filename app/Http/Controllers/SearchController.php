<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
    
    
class SearchController extends Controller
{
    public function search(Request $request){
        $table = trim($request->table);
        $field = trim($request->field);
        $entry = trim($request->entry);
        $noentry = trim($request->noentry);
        $condition = trim($request->condition);
        $where = $this->getWhere($field, $entry, $noentry, $condition);
        $results = DB::select('select * from '. $table. ' where '.$where, []);
        return view('searchreturn',[
                    'table' =>  $table,
                    'results' => $results,
                    'name' =>$this->getUserName()
                ]);
    }

    public function search_flush(){
        $res = DB::table('organisation')
        ->paginate(10);
        return view('searchreturn',[
                    'table' =>'organisation',
                    'results' => $res,
                    'name' =>$this->getUserName()
        ]);
    }

    public function search_contact_flush(){
        $res = DB::table('contact')
        ->paginate(10);
        return view('searchreturn',[
                    'table' =>'contact',
                    'results' => $res,
                    'name' =>$this->getUserName()
        ]);
    }

    public function search_admin(Request $request){
        $field = trim($request->field);
        $entry = trim($request->entry);
        $noentry = trim($request->noentry);
        $condition = trim($request->condition);
        $where = $this->getWhere($field, $entry, $noentry, $condition);
        // var_dump('select * from user where '.$where);die;
        $res = DB::select('select * from user where '.$where, []);
        // var_dump($res);
        $loginUser = $this->getUser();
        foreach($res as $v) {
            if ($v->type == $loginUser->type){
                session::flash('message', "Same level user can not edit");
                break;
            }
        }
        return view('search_admin_return',[
                    'results' => $res,
                    'name' =>$this->getUserName()
                ]);
    }

    public function search_admin_flush(){
        $res = DB::table('user')->paginate(10);
        return view('search_admin_return',[
                    'results' => $res,
                    'name' =>$this->getUserName()
        ]);
    }

    private function getWhere($field, $entry, $noentry, $condition) {
        $where = '';
        $entryArr = explode(',', $entry);
        $noentryArr = explode(',', $noentry);
        if ($entry != '' && !empty($entryArr)) {
            foreach ($entryArr as $k=>$v) {
                if ($k != 0){
                    $where.= ' or ';
                }
                if ($condition == 'like') {
                    $where .= $field . ' like ' ."'" .'%'.$v . "' ";
                } elseif($condition == 'exact') {
                    $where .= $field . ' = ' ."'" .$v. "' ";
                }
            }
        }
        if ($noentry != '' &&  !empty($noentryArr)) {
            $where.= ' and ';
            foreach ($noentryArr as $k=>$v) {
                if ($k != 0){
                    $where.= ' and ';
                }
                if ($condition == 'like') {
                    $where .= $field .' not like '."'" .'%'.$v . "' ";
                } elseif($condition == 'exact') {
                    $where .= $field .' != ' . "'" .$v. "' ";
                }
            }
        }
        if ($entry == '' && $noentry=='') {
            $where .= '1=1';
        }
        return $where;  
    }
   
}
