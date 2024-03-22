<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get()->all();
        return view('contact.index', compact('contacts'));
    }

    public function store(Request $request)

    {

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ];

        $this->validate($request, $rules);

        $contacts = new Contact();

        $contacts->name = $request['name'];
        $contacts->email = $request['email'];
        $contacts->phone = $request['phone'];
        $contacts->address = $request['address'];
        $contacts->message = $request['message'];


        $gallery->save();

        return redirect()->route('user-contact.index')->with('success', 'Contact  added successfully.');
    }
}
