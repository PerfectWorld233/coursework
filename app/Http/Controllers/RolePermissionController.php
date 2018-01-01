<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Report;
use App\User;
use App\Role;
use App\Permission;
use App\Permissionrole;

class RolePermissionController extends Controller
{
    public function pre_add_role(){
        return view("add_role",[
               'name' =>$this->getUserName()
        ]);
    }
    
    public function list_role(){
     
        $roles = DB::table('role')
              ->orderBy('id','desc')
              ->paginate(10);
        return view('list_role', [
                'roles' => $roles,
                'name' => $this->getUserName()
        ]);
    }
    
    public function add_role(Request $request){
        $role = new Role;
        $role->title = trim($request->title);
        $role->rules = trim($request->rules);
        $role->note = trim($request->note);
        $role->status = trim($request->status);
        if (trim($request->status)=='on'){
            $role->status = 1;
        }else{
            $role->status = 0;
        }
        // echo "<pre>";
        // print_r($role);
        $role->save();
        $report = new Report;
        $report->add_report($report, 1, 0, 0, $this->getMid());
        return redirect()->action('RolePermissionController@list_role');

    }
    
    
    public function edit_role(Request $request){
        $id=$request->get('id');
        $role = DB::table('role')->where('id', $id)->first();
        return view('edit_role', [
            'role' => $role,
            'name' =>$this->getUserName()
        ]);
    }

    public function update_role(Request $request){
        $role = new Role;
        $id = trim($request->id);
        $data['title'] = trim($request->title);
        $data['rules'] = trim($request->rules);
        $data['note'] = trim($request->note);
        if (trim($request->status)=='on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        var_dump($data);die;
        $res=$role->where("id", $id)->update($data);
        // var_dump($res);
        if ($res) {
            $report = new Report;
            $report->add_report($report, 0, 1, 0, $this->getMid());
            echo json_encode(['code'=>0, 'msg'=>"update success"]);
        }else {
            echo json_encode(['code'=>0, 'msg'=>"update fail"]);
        }
    }
    
    
    public function delete_role(Request $request){
        $id=$request->get('id');
        $role = Role::find($id);
        $res = $role->delete();
         // var_dump($res);
         if ($res) {
            $report = new Report;
            $report->add_report($report, 0, 0, 1, $this->getMid());
            echo json_encode(['code'=>0, 'msg'=>"delete success"]);
        }else {
            echo json_encode(['code'=>0, 'msg'=>"delete fail"]);
        }
    }

    
}
