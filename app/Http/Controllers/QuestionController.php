<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question_types;

class QuestionController extends Controller
{
   public function call_page()
   {
       return view('questions.AddQuestion');
   }

    public function type_listing()
    {
        $listing= question_types::get(['type_name']);
        $data['listing']=$listing;
        return view('questions.AddQuestion',$data);
    }
    public function get_listing(Request $request)
    {
        $data = $request->all();
        print_r($data);
        exit;
        return redirect('questions.AddQuestion',$data); 
    }
}
