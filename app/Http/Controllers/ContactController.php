<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Organisation;
use Session;
use App\Report;
use DB;
    
class ContactController extends Controller
{
    public function match_org_name() {
        $org = new Organisation;
        $res = $org->view_name();
        $names = [];
        if (!empty($res)) {
            foreach ($res as $k=>$v) {
                $names[$k] = $v->name;
            }
        }
        return $names;
    }
    public  function Index(){
        return view('dataentry', [
               'name' => $this->getUserName(),
               'list_org_name' => $this->match_org_name()               
            ]);
    }

    public  function  data_search(){
        return view('datasearch',['name' => $this->getUserName()]);
    }
    
    public function add_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', error_message("Session expired, login required"));
            return redirect()->action('HomeController@index');
        }
        $contact = new Contact;
        $id = trim($request->id);
        $contact->recordType = trim($request->recordType);
        $contact->recordStatus = trim($request->recordStatus);
        $contact->instruction = trim($request->instruction);
        $contact->fname = trim($request->fname);
        $contact->lname = trim($request->lname);
        $contact->title = trim($request->title);
        $contact->jobtitle = trim($request->jobtitle);
        $contact->email = trim($request->email);
        $contact->telephone = trim($request->telephone);
        $contact->telephone2 = trim($request->telephone2);
        $contact->mobile = trim($request->mobile);
        $contact->personType = trim($request->personType);
        $contact->organisation = trim($request->organisation);
        $contact->departmentLevel1 = trim($request->departmentLevel1);
        // $contact->departmentLevel2 = trim($request->departmentLevel2);
        $contact->postcode = trim($request->postcode);
        $contact->region = trim($request->region);
        $contact->country = trim($request->country);
        $contact->linkedln = trim($request->linkedIn);
        $contact->professionalInterest = trim($request->professionalInterest);
        $contact->biographyText = trim($request->biographyText);
        $contact->notes = trim($request->notes);
        $contact->entry_time = date('Y-m-d H:i:s');
        // echo "<pre>";
        // print_r($contact);
      
        $contact->save();
        session::flash('message', "Contact added successfully");
        $report = new Report;
        $report->add_report($report, 0, 1, 0, $this->getMid());
        return redirect()->action('ContactController@Index');
    }
    
    
    public function edit_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', "Permission denied or session expired");
            return redirect()->action('HomeController@index');
        }
        $id=$request->get('id');
        $con = DB::table('contact')->where('id', $id)->first();
        // echo "<pre>";
        // var_dump($id, $org);die;
        if (empty($con)) {
            session::flash('message','do not exist the contact id!');
            return redirect()->action('SearchController@search_flush');
        }
        return view('edit_contact', [
            'table' =>'contact',
            'con' => $con,
            'name' => $this->getUserName()
        ]);
    }
   
    
    public function update_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', "Permission denied or session expired");
            return redirect()->action('HomeController@index');
        }
        $contact = new Contact;
        $id = trim($request->id);
        $data['instruction'] = trim($request->instruction);
        $data['jobtitle']  = trim($request->jobtitle);
        $data['personType']  = trim($request->personType);
        $data['organisation']  = trim($request->organisation);
        $data['region']  = trim($request->region);
        $data['country']  = trim($request->country);
        $res=$contact->where("id", $id)->update($data);
        if ($res) {
            $report = new Report;
            $report->add_report($report, 0, 1, 0, $this->getMid());
        }
        return redirect()->action('SearchController@search_contact_flush');
    }

    public function delete_contact(Request $request){
        if(!$this->check_permission()){
            session::flash('message', "Permission denied or session expired");
            return redirect()->action('HomeController@index');
        }
        $id=$request->get('id');
        // var_dump($id);die;
        $res = DB::delete('delete from contact where id = ?',[$id]);
         // var_dump($res);
         if ($res) {
            $report = new Report;
            $report->add_report($report, 0, 0, 1, $this->getMid());
        }
        return redirect()->action('SearchController@search_contact_flush');
    }

}
