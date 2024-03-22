<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get()->all();
        return view('backend.contact.index')->with(compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::where('id', $id)->get()->first();
        return view('backend.contact.edit')->with(compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ];

        $this->validate($request, $rules);
        $contact = Contact::findorFail($id);


        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->address = $request['address'];
        $contact->message = $request['message'];

        



        $contact->update();

        return redirect()->route('admin-contact.index')->with('success', 'contact updated successfully!');
    }
}
