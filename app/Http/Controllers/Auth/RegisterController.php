<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\EmployeeSize;
use App\companies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    } */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
  
    public function addSave(Request $request)
    {
        $data = $request->all();

        $product = new Product();
        $product->name = $data['name'];
        $product->descriptiion = $data['descriptiion'];
        $product->status = $data['status'];
        $product->save();
        return redirect("/home");
    }

    public function insert_form()
    {

        $employees = EmployeeSize :: get();
        $data = [];
        $data['employees'] = $employees;
        return view('auth.register' , $data);
        print_r($data);
        exit;
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
        

           User::create([
            'name' => $data['c_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role'=>'company',
        ]);
       // companies::create($request->all());
       //  
        return redirect('/home');
       }

    public function login(){
        echo "hi";
    }
}
