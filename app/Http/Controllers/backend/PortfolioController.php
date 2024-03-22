<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PorfolioCategory;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::get()->all();
        return view('backend.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfoliocategories = PorfolioCategory::get()->all();
        return view('backend.portfolio.create', compact('portfoliocategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $rules = [
            'title' => 'nullable',

        ];

        $this->validate($request, $rules);

        $portfolio = new Portfolio();

        $portfolio->category_id = $request->category_id;


        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {

                $extension = $image_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/portfolio/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);

                $portfolio->image = $imageName;
            }
        }

        $portfolio->save();

        return redirect()->route('admin-portfolio.index')->with('success', 'portfolio entry added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    public function edit($id)
    {
        $categories = PorfolioCategory::get()->all();
        $portfolio  = Portfolio::where('id', $id)->get()->first();
        return view('backend.portfolio.edit')->with(compact('portfolio', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // dd($request->all());

        $rules = [
            'title' => 'nullable',

        ];

        $this->validate($request, $rules);

        // $portfolio = portfolio::Where('id', $id)->findorFail();
        $portfolio = Portfolio::findorFail($id);

        $portfolio->category_id = $request->category_id;






        if ($request->hasFile('image')) {
            $exists = 'images/portfolio/' . $portfolio->image;
            if (File::exists($exists)) {
                File::delete($exists);
            }
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //dd('open');
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/portfolio/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);
                $portfolio->image = $imageName;
            }
        }



        $portfolio->update();

        return redirect()->route('admin-portfolio.index')->with('success', 'portfolio entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findorFail($id);
        $exists = 'images/portfolio/' . $portfolio->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $portfolio->delete();
        $message  = "portfolio Delete Successfully Done";
        return redirect(route('admin-portfolio.index'))->with("success", $message);
    }
}
