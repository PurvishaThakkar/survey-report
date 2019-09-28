<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departments;

use App\companies;

class DepartmentController extends Controller
{

    public function call_page()
    {
        $departments =departments::get();
        $data  = [];
        $data['departments'] = $departments;
        $table=[];
        $departments=new departments;
        $data['name']=$departments->getTable();
        $data['all'] = $departments->getTableColumns();
        return view('departments.DepartmentDetail',$data,$table);
    }
    public function insert_form()
    {
        $companies = companies::get();
        return view('departments.AddDepartment', ["companies" => $companies]);  
    }
    public function store_department(Request $request)
    {
        
        departments::create($request->all());
      
        return redirect("Department/DepartmentDetail"); //aa path web.php ma je url ma dekhy ae fetch thy ny ke folder mathi......
    }

    public function delete_department($id)
    {
        // Delete user
        $departments = departments::find($id);
        $employees = employees::where('dept_id',$departments->$id)->delete();
        $departments->delete();
        return redirect("Department/DepartmentDetail");
    }

    public function edit_department($id)
    {
         
       $departments = departments::find($id);
       $companies = companies::get();
       return view('departments.EditDepartment', ['department' => $departments],['companies'=> $companies]);
       
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();

        // save product based on id
        $department = departments::find($id);
        $department->d_name = $data['d_name'];
        $department->status = $data['status'];
        $department->company_id = $data['company_id'];
        $department->save();
        return redirect("Department/DepartmentDetail");
    }
}
