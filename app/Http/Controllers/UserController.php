<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class UserController extends Controller
{
  
    public function call_page()
    {
       $users =users::get();
        $data  = [];
        $data['users'] = $users;
        $table=[];
        $users=new users;
        $data['name']=$users->getTable();
        $data['all'] = $users->getTableColumns();
        return view('users.UserDetail',$data,$table);
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
    public function delete_user($id)
    {
        // Delete user
        $contacts = users::find($id);
        $contacts->delete();
        return redirect("/users/UserDetail");

       
    }
    public function edit_user($id)
    {
         
       $users = users::find($id);
       return view('users.editUser', ['user' => $users]);
       
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();

        // save product based on id
        $user = users::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

       
        $user->save();
        return redirect('users/UserDetail');
    }
}
