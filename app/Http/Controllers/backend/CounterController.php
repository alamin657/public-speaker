<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counters = Counter::get()->all();
        return view('backend.counter.index', compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'number' => 'required',
        ];
        $this->validate($request, $rules);

        $counter = new Counter();
        $counter->name = $request->name;
        $counter->number = $request->number;
        $counter->save();
        return redirect(route('admin-counter.index'))->with('success', 'Counter Update Successfully!');
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
        $counter = Counter::where('id', $id)->firstorFail();
        return view('backend.counter.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required',
            'number' => 'required',
        ];
        $this->validate($request, $rules);

        $counter = Counter::findorFail($id);
        $counter->name = $request->name;
        $counter->number = $request->number;
        $counter->update();
        return redirect(route('admin-counter.index'))->with('success', 'Counter Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
