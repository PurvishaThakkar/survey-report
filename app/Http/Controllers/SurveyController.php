<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey;
use App\companies;

class SurveyController extends Controller
{
    public function call_page()
    {
       $surveys =survey::paginate(1);
       
        $data  = [];
        $data['surveys'] = $surveys;
        $table=[];
        $surveys=new survey;
        $data['name']=$surveys->getTable();
        $data['all'] = $surveys->getTableColumns();
        
        return view('surveys.SurveyDetail',$data,$table);
    }
    public function store_survey(Request $request)
    {
        survey::create($request->all());
       /* return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/
            // companies::create($request->all());
        return redirect('surveys/SurveyDetail');
      
        
    }
    public function insert_form()
    {

        $surveys = survey :: get();
        $companies = companies::get();
        return view('surveys.AddSurvey' , ["companies" => $companies]);
    }
    public function delete_survey($id)
    {
        // Delete user
        $surveys = survey::find($id);
        $surveys->delete();
        return redirect('surveys/SurveyDetail');
    }


    public function edit_survey($id)
    {
       $survey = survey::find($id);
       $companies = companies::get();
        return view('surveys.EditSurvey', ['survey' => $survey], ["companies" => $companies]);  
    }

    public function edit_save($id, Request $request)
    {
        $data = $request->all();
       
        // save product based on id
        $user = survey::find($id);
        $user->comp_id = $data['comp_id'];
        $user->s_start_date = $data['s_start_date'];
        $user->s_end_date  = $data['s_end_date'];
        $user->survey_title = $data['survey_title'];
        $user->desc = $data['desc'];
        $user->status = $data['status'];
        $user->save();
     
       /*  if($request->header('content-type') ==  "application/json"){
        
            return response()->json($user);
           }else{
             */
            return redirect('surveys/SurveyDetail');
       // } 
    }
}
