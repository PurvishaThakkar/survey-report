<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companies;
use App\EmployeeSize;
use App\departments;
use App\employees;

class CompanyController extends Controller
{
    public function call_page()
    {
       $companies =companies::get();
       
        $data  = [];
        $data['companies'] = $companies;
        $table=[];
        $companies=new companies;
        $data['name']=$companies->getTable();
        $data['all'] = $companies->getTableColumns();
        return view('companies.CompanyDetail',$data,$table);
    }

   
    
    public function delete_company($id)
    {
        // Delete user
        $companies = companies::find($id);
        $cid=$companies->c_id;
        $departments = departments::where('company_id',$cid)->delete();
       $employees = employees::where('comp_id',$cid)->delete();
       $companies->delete();
        return redirect('companies/CompanyDetail');

       
    }
    public function edit_company($id)
    {
         

       $companies = companies::find($id);

        return view('companies.EditCompany', ['company' => $companies]);
       
       
       
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();
       
        // save product based on id
        $user = companies::find($id);
        $user->c_name = $data['c_name'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->phone_no = $data['phone_no'];
        $user->no_of_emp = $data['no_of_emp'];
        $user->status = $data['status'];
        $user->save();
     
        if($request->header('content-type') ==  "application/json"){
        
            return response()->json($user);
           }else{
            
            return redirect('companies/CompanyDetail');
        } 
    }
    public function store_company(Request $request)
    {
        $data = $request->all();
       /* return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/
         companies::create(array_merge($request->all(),['password' =>bcrypt($data['password'])]));
        
       // companies::create($request->all());
       //
        if($request->header('content-type') ==  "application/json"){
        
        return response()->json($data);
       }else{
        
        return redirect('companies/CompanyDetail');
    } 
      
        
    }
    public function insert_form()
    {

        $employees = EmployeeSize :: get();
        $data = [];
        $data['employees'] = $employees;
        return view('companies.AddCompany' , $data);
    }

}
