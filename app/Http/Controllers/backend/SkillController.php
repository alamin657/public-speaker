<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::get()->all();
        return view('backend.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'nullable',
            'number' => 'nullable',
        ];
        $this->validate($request, $rules);

        $skill = new Skill();
        $skill->name = $request['name'];
        $skill->number = $request['number'];


        $skill->save();

        return redirect()->route('admin-skill.index')->with('success', 'skill information successfully.');
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
        $skill = Skill::Where('id', $id)->get()->first();
        return view('backend.skill.edit')->with(compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'nullable',
            'number' => 'nullable',
        ];
        $this->validate($request, $rules);

        $skill = Skill::findorFail($id);
        $skill->name = $request['name'];
        $skill->number = $request['number'];

        $skill->update();
        return redirect()->route('admin-skill.index')->with('success', 'skill information update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findorFail($id);
        $skill->delete();

        return redirect()->route('admin-skill.index')->with('success', 'skill information delete successfully.');
    }
}
