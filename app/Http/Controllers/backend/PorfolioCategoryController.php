<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PorfolioCategory;
use Illuminate\Http\Request;

class PorfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfoliocategories = PorfolioCategory::get()->all();
        return view('backend.portfolioCategory.index', compact('portfoliocategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.portfolioCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',

        ];

        $this->validate($request, $rules);

        $portfoliocategories = new PorfolioCategory();

        $portfoliocategories->name = $request['name'];


        $portfoliocategories->save();

        return redirect()->route('portfoloioCategory.index')->with('success', 'portfolio category entry added successfully.');
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
        $portfoliocategory  = PorfolioCategory::where('id', $id)->get()->first();
        return view('backend.portfolioCategory.edit')->with(compact('portfoliocategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { {

            $rules = [
                'name' => 'required',

            ];

            $this->validate($request, $rules);

            $portfoliocategories = PorfolioCategory::findorFail($id);

            $portfoliocategories->name = $request['name'];


            $portfoliocategories->update();

            return redirect()->route('portfoloioCategory.index')->with('success', 'portfolio category entry added successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfoliocategories = PorfolioCategory::findorFail($id);
        $portfoliocategories->delete();
        return redirect(route('portfoloioCategory.index'))->with('success', 'portfolio category delete successfully.');
    }
}
