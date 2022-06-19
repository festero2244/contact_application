<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    
    public function index()
    {
       $contacts = Contact::all();
       return view ('basic.index')->with('contacts', $contacts);
    }

    public function create()
    {
       return view('basic.create');
    }

    public function store(Request $request)
    {
       $input = $request->all();
       Contact::create($input);
       return view('basic.thanks');
    }

  
    public function show($id)
    {
       $contact = Contact::find($id);
       return view('basic.show')->with('contact', $contact);
    }

   
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('basic.edit')->with('contact', $contact);
    }

 
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return view('basic.thanks');
    }

   
    public function destroy($id)
    {
       
    }

    
}
