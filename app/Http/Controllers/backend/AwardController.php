<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;

class awardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::get()->all();
        return view('backend.award.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.award.create');
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

        $award = new Award();

        $award->title = $request['title'];



        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {

                $extension = $image_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/award/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);

                $award->image = $imageName;
            }
        }

        $award->save();

        return redirect()->route('admin-award.index')->with('success', 'award entry added successfully.');
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
        $award  = Award::where('id', $id)->get()->first();
        return view('backend.award.edit')->with(compact('award'));
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

        // $award = award::Where('id', $id)->findorFail();
        $award = Award::findorFail($id);


        $award->title = $request['title'];



        if ($request->hasFile('image')) {
            $exists = 'images/award/' . $award->image;
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
                $imagePath = 'images/award/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);
                $award->image = $imageName;
            }
        }



        $award->update();

        return redirect()->route('admin-award.index')->with('success', 'award entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $award = Award::findorFail($id);
        $exists = 'images/award/' . $award->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $award->delete();
        $message  = "award Delete Successfully Done";
        return redirect(route('admin-award.index'))->with("success", $message);
    }
}
