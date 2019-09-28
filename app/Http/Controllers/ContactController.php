<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store_contact(Request $request)
    {
        Contact::create($request->all());
      
        return redirect("/contacts/ContactDetail"); 
    }
    public function insert_form()
    {
        return view('contacts.addContact');
    }
    public function call_page()
    {
       $contacts =contact::paginate(3);
        $data  = [];
        $table=[];
        $columns=[];
        $data['contacts'] = $contacts;
        $contact=new contact;
        $data['name']=$contact->getTable();
        $data['all'] = $contact->getTableColumns();
        return view('contacts.ContactDetail',$data);
    
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
    public function delete_contact($id)
    {
        // Delete contact
        $contacts = contact::find($id);
        $contacts->delete();
        return redirect("/contacts/ContactDetail");

       
    }
    public function edit_contact($id)
    {
       
       /* $prices = Price::find($id);*/
       $contacts = contact::find($id);
       return view('contacts.editContact', ['contact' => $contacts]);
       
        /*return redirect("admin_edit_product");*/
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();

        // save product based on id
        $contact = contact::find($id);
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->phone_no = $data['phone_no'];
        $contact->msg = $data['msg'];

       
        $contact->save();
        return redirect('contacts/ContactDetail');
    }
}
