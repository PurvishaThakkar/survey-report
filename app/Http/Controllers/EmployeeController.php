<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\departments;
use App\companies;
class EmployeeController extends Controller
{
    public function call_page()
    {
       $employees =employees::get();
        $data  = [];
        $data['employees'] = $employees;
        $table=[];
        $employees=new employees;
        $data['name']=$employees->getTable();
        $data['all'] = $employees->getTableColumns();
        return view('employees.EmployeeDetail',$data,$table);
           
    }
    public static function getDept($id)
           {
            $employees =departments::find($id);
            return view('employees.EmployeeDetail',$employee);
           }
           

    public function index()
    {
        $contacts =Contact::get();
        $data  = [];
        $data['contacts'] = $contacts;

        return view('contacts.ContactDetail', $data);
    }
    public function userdetail()
    {
        $users =User::get();
        $data  = [];
        $data['users'] = $users;

        return view('users_list', $data);
    }
    public function delete_employee($id)
    {
        // Delete user
        $employees = employees::find($id);
        $employees->delete();
        return redirect('employees/EmployeeDetail');
    }
    public function edit_employee($id)
    {
        $data = [];
       $employees = employees::find($id);
       $data['departments'] = departments::get();
       $data['companies'] = companies::get();
       //print_r($departments);
      // print_r($companies);
       //exit;
       return view('employees.EditEmployee', ['employee' => $employees],$data);
       
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();

        // save product based on id
        $employee = employees::find($id);
        $employee->e_name = $data['e_name'];
        $employee->email = $data['email'];
        $employee->address = $data['address'];
        $employee->phone_no = $data['phone_no'];
        $employee->status = $data['status'];
        $employee->comp_id = $data['comp_id'];
        $employee->dept_id = $data['dept_id'];
        $employee->save();
        return redirect('employees/EmployeeDetail');
    }
    public function store_Employee(Request $request)
    {
        
        $data = $request->all();
        //print_r($data);
        //exit;
       employees :: create(array_merge($request->all(),['password' => bcrypt($data['password'])]));
      
        return redirect('employees/EmployeeDetail'); 
    }
    public function insert_form()
    {
        $companies = companies::get();
        $departments = departments::get();
        return view('employees.AddEmployee',["companies" => $companies],["departments" => $departments]);
      
    }
    public function get_message($id)
    {
        //$department = departments::find($id);
       //return view('employees.EmployeeDetail', ['employee' => $department]);
       echo "gfgfg";
       exit;
    }
}
