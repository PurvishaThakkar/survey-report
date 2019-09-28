<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\EmployeeSize;
use App\companies;
use App\departments;


class ConnectionController extends Controller
{

        public function employeeCountList()
        {

            $empSize = EmployeeSize :: get();
            $response = [];
            $response['status'] = true;
            $response['data'] = $empSize;
            return response()->json($response);

        }
        public function registration(Request $request)
        {

            $Validator = Validator::make($request->all(),[
                'c_name' =>'required',
                'email'=>'required',
                'address'=>'required',
                'phone_no'=>'required',
                'no_of_emp'=>'required',
                'status' =>'required',
                'password'=>'required',
            ]);
            if($Validator->fails()){
                return response()->json($Validator->errors());
            }
            else{
                $data = $request->all();
                $data['password'] = bcrypt($data['password']);
                $user = companies::create($data);
                return response()->json($user);
            }
            
        }
        public function deptId( $companyId)
        {
            $deptid = companies::find($companyId);
            $response = [];
            $response['status'] = true;
            $response['data'] = $deptid->departments;
            return response()->json($response);
        }
        public function showLogin(Request $request)
        {

            
            $response = [];
            $data =$request->all();
            $email = $data['email'];
            $user = companies::where('email',$email)->get()->first();
           
            if($user)
            {
                $has = app('hash');
                if($has->check($data['password'],$user->password))
                {
                    $response['status'] = true;
                    $response['data']=$user;
                }
                else
                {
                    $response['status'] = false;
                    $response['message']="Username or password not match";
                }
                return response()->json($response);
            } 
            if($request->header('content-type') ==  "application/json"){
                $response['status'] = false;
                $response['message'] = "Email Not exist";
                return response()->json($response);
            }else{
                
            }
            
        }
    
}
