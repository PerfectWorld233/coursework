<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Organisation;
    use DB;
    use Session;
class OrganisationController extends Controller
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
    
    public function Index(){

        return view('organisation', []);
    }

    
    public function organisation_form(){
        if(!$this->check_permission()){
            session::flash('message', error_message("Session expired, login required"));
            return redirect()->action('HomeController@index');
        }
        $title = "Organisation";
        $organisation = DB::table('organisation')
        ->where('organisation_id', '!=', 1)
        ->orderBy('organisation_id', 'desc')
        ->paginate(10);
        $all_organisations = DB::table('organisation')
        ->where('organisation_id', '!=', 1)
        ->get();
        return view('organisation.organisation_form', [
                    'title' => $title,
                    'organisation' => $organisation,
                    'all_organisation' => $all_organisation
                    ]);
    }
    
    
    public function add_organisation(Request $request){
        if(!$this->check_permission()){
            session::flash('message', error_message("Session expired, login required"));
            return redirect()->action('HomeController@index');
        }
        $organisation = new Organisation;
        $organisation->id = $id = trim($request->id);
        $organisation->name = trim($request->name);
        $organisation->category = trim($request->category);
        $organisation->orgType = trim($request->orgType);
        $organisation->interestSectorAreas = trim($request->interestSectorAreas);
        $organisation->postcode = trim($reqeust->postcode);
        $organisation->country = trim($request->country);
        $organisation->region = trim($request->region);
        $organisation->twitter = trim($request->twitter);
        $organisation->schoolLowerAge = trim($request->schoolLowerAge);
        $organisation->schoolHigherAge = trim($request->schoolHigherAge);
        $organisation->schoolURN = trim($request->schoolURN);
        $organisation->notes = trim($request->notes);
        //$organisation->entry_time = date('Y-m-d H:i:s');
        
        
        
        $check_organisation = DB::table('organisation')
        ->where('id', $id)
        ->count();
        if($check_product > 0){
            session::flash('message', error_message("Organisation added failed"));
            return redirect()->action('OrganisationController@organisation_form');
        } else {
            $organisation->save();
            session::flash('message', success_message("Organisation added successfully"));
            return redirect()->action('OrganisationController@organisation_form');
        }
    }
    
   

}
