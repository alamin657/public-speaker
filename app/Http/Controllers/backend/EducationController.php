<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::get()->all();
        return view('backend.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'title' => 'required',
            // 'start_date' => 'nullable',
            // 'end_date' => 'nullable',
            // 'description' => '',
        ];
        $this->validate($request, $rules);

        $education = new Education();
        $education->name = $request['name'];
        $education->title = $request['title'];
        $education->start_date = $request['start_date'];
        $education->end_date = $request['end_date'];
        $education->description = $request['description'];

        $education->save();

        return redirect()->route('admin-education.index')->with('success', 'education information store successfully.');
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
        $education = Education::where('id', $id)->get()->first();
        return view('backend.education.edit')->with(compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required',
            'title' => 'required',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'description' => 'nullable',
        ];
        $this->validate($request, $rules);

        $education = Education::findorFail($id);
        $education->name = $request['name'];
        $education->title = $request['title'];
        $education->start_date = $request['start_date'];
        $education->end_date = $request['end_date'];
        $education->description = $request['description'];

        $education->save();

        return redirect()->route('admin-education.index')->with('success', 'education information update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findorFail($id);
        $education->delete();

        return redirect()->route('admin-education.index')->with('success', 'education information delete successfully.');
    }
}
