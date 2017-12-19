<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\User;
    use DB;
    use Session;
class UserController extends Controller
{
    private function check_permission() {
        $superadmin = session::get('superadmin_login');
        $admin = session::get('admin_login');
        $user = session::get('user_login');
        
        if($superadmin == true || $admin == true || $user == true){
            if($user == true){
                $user_id = session::get('user_id');
                $perm = DB::table('user')
                ->where('user_id', $user_id)
                ->first();
                $permission = $perm->organisation_perm;
                if($permission == 1){
                    return true;
                } else {
                    return false;
                }
            }
            if($admin == true){
                return true;
            }
            elseif($superadmin == true){
                return true;
            }
        } else {
            return false;
        }
    }

    
    public function index(){
        return view('adduser');
    }
    
    public function user_form(){
        if(!$this->check_permission()){
            session::flash('message',error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $title = "User";
        $user = DB::table('user')
              ->orderBy('id','desc')
              ->paginate(10);
        return view('adduser',[
                    'title' => $title,
                    'user'  =>$user
                    ]);
    }
    
    
    
    public function add_user(Request $request){
        if(!$this->check_permission()){
            session::flash('message',error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $user = new User;
        $user->id = $id = trim($request->id);
        $user->fname = trim($request->fname);
        $user->lname = trim($request->lname);
        $user->email = trim($request->email);
        $user->password = sha1(trim($request->password));
        $user->userlevel = trim($request->userlevel);
        $user->active = trim($request->active);
        $user->entry_time = date('Y-m-d H:i:s');
        
        $check_user = DB::table('user')
                    ->where('id', $id)
                    ->count();
        if($check_user > 0){
            session::flash('message', error_message("added failed"));
            return redirect()->action('UserController@user_form');
        } else {
            $user->save();
            session::flash('message', success_message("added successfully"));
            return redirect()->action('UserController@user_form');
        }

    }
    
    
    public function view_user($id){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $user = DB::table('user')
        ->where('id', $id)
        ->first();
        $title = $user->fname->lname ;
        return view('adminuser', [
                    'title' => $title,
                    'user' => $user
                    ]);
    }

    
    public function delete_user($id){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $user = User::find($id);
        $user->delete();
        session::flash('message', success_message("User deleted successfully"));
        return redirect()->action('UserController@user_form');
    }
    
    
    
    public function edit_user($id){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $user = User::find($id);
        $title = "Update User";
        return view('useredit', ['user' => $user, 'title' => $title]);
    }

    
    public function update_user(Request $request){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        $id = $request->id;
       // $user->fname = trim($request->fname);
//        $user->lname = trim($request->lname);
//        $user->email = trim($request->email);
//        $user->password = sha1(trim($request->password));
//        $user->userlevel = trim($request->userlevel);
//        $user->active = trim($request->active);
        
        
        $check_user = DB::table('user')
        ->where('id', $id)
        ->count();
        if($check_user > 0){
            session::flash('message', error_message("updated failed"));
            //$user->save();
            return redirect()->action('UserController@edit_user', ['id' => $id]);
        } else {
          //  $user->id = $id;
         //   $user->save();
            session::flash('message', success_message("updated successfully"));
            return redirect()->action('UserController@user_form');
        }
    }
    
    
    public function updateActivePerm($id, $perm){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        DB::table('user')->where('id', $id)
                ->update([$perm => 1]);
        return "true";
    }
    
    public function updateInactivePerm($id, $perm){
        if(!$this->check_permission()){
            session::flash('message', error_message("Permission denied or session expired"));
            return redirect()->action('HomeController@index');
        }
        DB::table('user')->where('id', $id)
        ->update([$perm => 0]);
        return "true";
    }

    
}
