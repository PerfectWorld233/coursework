<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;
use Session;
    
    
class ContactController extends Controller
{
    private function check_permission() {
        var_dump(Session::get('superadmin_login'));die;
        $superadmin = Session::get('superadmin_login');
        $admin = session::get('admin_login');
        $user = session::get('user_login');
    
        if($superadmin == true || $admin == true || $user == true){
            if($user == true){
                $user_id = session::get('user_id');
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
    
    public  function Index(){
        return view('dataentry', []);
    }

    public  function  data_search(){
        return view('datasearch');
    }

    
    public function add_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', error_message("Session expired, login required"));
            return redirect()->action('HomeController@index');
        }
        $contact = new Contact;
        $contact->id = $id = trim($request->id);
        $contact->recordType = trim($request->recordType);
        $contact->email = trim($request->email);
        $contact->instruction = trim($request->instruction);
        $contact->title = trim($request->title);
        $contact->fname = trim($request->fname);
        $contact->lname = trim($request->lname);
        //$contact->recordStatus = $recordStatus($request->recordStatus);
        $contact->jobtitle = trim($request->jobtitle);
        $contact->twitter = trim($request->twitter);
        $contact->linkedIn = trim($request->linkedIn);
        $contact->professionalInterest = trim($request->professionalInterest);
        $contact->professionalWeb = trim($request->professionalWeb);
        $contact->personType = trim($request->personType);
        $contact->telephone = trim($request->telephone);
        //$contact->telephone2 = trim($reqeust->telephone2);
        $contact->mobile = trim($request->mobile);
        $contact->organisation = trim($request->organisation);
       // $contact->departmentLevel1 = trim($reqeust->departmentLevel1);
        $contact->departmentLevel2 = trim($request->departmentLevel2);
       // $contact->postcode = trim($reqeust->postcode);
        $contact->country = trim($request->country);
        $contact->region = trim($request->region);
        //$contact->biographyText = trim($reqeust->biographyText);
        $contact->notes = trim($request->notes);
        //$contact->contact_description = trim($request->brand_description);
        $contact->entry_time = date('Y-m-d H:i:s');
        
        $check_contact = DB::table('contact')
        ->where('id', $id)
        ->count();
        if($check_contact > 0){
            session::flash('message', error_message("Contact added failed"));
            return redirect()->action('ContactController@contact_form');
        } else {
            $contact->save();
            session::flash('message', success_message("Contact added successfully"));
            return redirect()->action('ContactController@contact_form');
        }
    }
    
    
    public function edit_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', error_message("Session expired, login required"));
            return redirect()->action('HomeController@index');
        }
        //$contact = Contact::find($contact_id);
        $title = "Update Contact";
        return view('edit_contact');
    }
    
    
    
    
    
}
