<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
    
    
class SearchController extends Controller
{
    public function search(Request $request){
        $recordType = $this->setInput($request->recordType);
        $instruction = $this->setInput($request->instruction);
        $recordStatus = $this->setInput($request->recordStatus);
        $jobtitle = $this->setInput($request->jobtitle);
        //$personType = $this->setInput($erquest->personType);
       // $professionalInterest = $this->setInput($reqquest->professionalInterest);
        $organisation = $this->setInput($request->organisation);
        $departmentLevel1 = $this->setInput($request->departmentLevel1);
        $departmentLevel2 = $this->setInput($request->departmentLevel2);
        $orgType = $this->setInput($request->orgType);
        $country = $this->setInput($request->country);
       // $region = $this->setInput($rquest->region);
        $biographyText = $this->setInput($request->biographyText);
        //$notes = $this->setInput($reuest->biographyText);
        $schoolLowerAge = $this->setInput($request->schoolLowerAge);
        $schoolHigherAge = $this->setInput($request->schoolHigherAge);
        $schoolURN = $this->setInput($request->schoolURN);
//        $
//        if(!$)
//
        
        
        
        $results = DB::table('contact','organisation')
                ->where('contact.recordType',$recordType)
                ->where('contact.instruction',$instruction)
                ->where('contact.recordStatus',$recordStatus)
                ->where('contact.jobtitle',$jobtitle)
                //->where('contact.personType',$personType)
              ///  ->where('contact.professionalInterest',$professionalInterest)
                ->where('contact.organisaiton',$organisation)
                ->where('contact.departmentLevel1',$departmentLevel1)
                ->where('contact.departmentLevel2',$departmentLevel2)
                ->where('contact.biographyText',$biographyText)
                //->where('contact.notes',$notes)
                ->where('organisation.orgType',$orgType)
               // ->where('organisation.professionalInterest',$professionalInterest)
                ->where('organisation.schoolLowerAge',$schoolLowerAge)
                ->where('organisation.schoolHigherAge',$schoolHigherAge)
                ->where('organisation.schoolURN',$schoolURN)
                ->paginate(20);
        $count = DB::table('contact','organisation')
                ->where
                ->count();
        
        $title = "Total result found " . $count;
        return view('searchreturn',[
                    'title' => $title,
                    'results' => $results
                    ]);
    }
    
    private function setInput($var){
        if(isset($var) && !empty($var)){
            return $var;
        } else {
            return false;
        }
    }
}
