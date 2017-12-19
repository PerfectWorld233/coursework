<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Dataupload;
use DB;
use Session;

class DatauploadController extends Controller
{
    private function check_permission(Request $request) {
        $superadmin =$request->session()->get('superadmin_login');
        $admin = $request->session()->get('admin_login');
        $user = $request->session()->get('user_login');
        
        if($superadmin == true || $admin == true || $user == true){
            if($user == true){
                $user_id = $request->session()->get('user_id');
                $perm = DB::table('user')
                ->where('user_id', $user_id)
                ->first();
                $permission = $perm->user_perm;
                if($permission == 1){
                    return true;
                } else {
                    return false;
                }
            }
            if($admin == true){
                return true;
            }
            if($superadmin == true){
                return true;
            }
        } else {
            return false;
        }
    }

    
    
    public function dataupload_form(Request $request){
        if(!$this->check_permission($request)){
           $request->session()->flash('message', "Session expired, login required");
            return redirect()->action('HomeController@index');
        }
        $title = "Dataupload";
        $products = DB::table('dataupload')
        ->where('id', '!=', 1)
        ->orderBy('id', 'desc')
        ->paginate(10);
        $all_products = DB::table('dataupload')
        ->where('id', '!=', 1)
        ->get();
        return view('dataupload.dataupload_form', [
                    'title' => $title,
//                    'dataupload' => $dataupload,
//                    'all_dataupload' => $all_dataupload
                    ]);
    }
    
    public  function  Index(){
        return view('dataupload');
    }

    public  function DailyReport(){
        return view('dailyreport');
    }

    public  function TargetReport(){
        return view('targetreport',['users'=>[]]);
    }
    

    
}
