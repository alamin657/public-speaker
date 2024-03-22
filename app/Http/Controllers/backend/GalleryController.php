<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = gallery::get()->all();
        return view('backend.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $rules = [
            'title' => 'nullable',
            'date' => 'nullable',
        ];

        $this->validate($request, $rules);

        $gallery = new Gallery();

        $gallery->title = $request['title'];
        $gallery->date = $request['date'];


        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {

                $extension = $image_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/gallery/' . $imageName;
                Image::make($image_temp)->resize(300, 200)->save($imagePath);

                $gallery->image = $imageName;
            }
        }

        $gallery->save();

        // return redirect()->back()->with('success', 'Gallery created successfully!');
        return redirect()->route('admin-gallery.index')->with('success', 'Gallery  added successfully.');
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
    // dashboard_gallery controller

    // public function edit(string $id)
    // {
    //     $gallery = Gallery::where('id', $id)->get()->first();
    //     return view('backend.gallery.edit')->with(compact('gallery'));
    // }

    public function edit($id)
    {
        $gallery  = gallery::where('id', $id)->get()->first();
        return view('backend.gallery.edit')->with(compact('gallery'));
    }
    // {
    //     $gallery = gallery::find($id);

    //     if (!$gallery) {
    //         return redirect()->route('admin-gallery.index')->with('error', 'Gallery not found.');
    //     }

    //     return view('backend.gallery.edit', compact('gallery'));
    // }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // dd($request->all());

        $rules = [
            'title' => 'nullable',
            'date' => 'nullable',
        ];

        $this->validate($request, $rules);

        // $gallery = gallery::Where('id', $id)->findorFail();
        $gallery = gallery::findorFail($id);


        $gallery->title = $request['title'];
        $gallery->date = $request['date'];


        if ($request->hasFile('image')) {
            $exists = 'images/gallery/' . $gallery->image;
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
                $imagePath = 'images/gallery/' . $imageName;
                Image::make($image_temp)->resize(300, 200)->save($imagePath);
                $gallery->image = $imageName;
            }
        }



        $gallery->update();

        return redirect()->route('admin-gallery.index')->with('success', 'Gallery updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = gallery::findorFail($id);
        $exists = 'images/gallery/' . $gallery->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $gallery->delete();
        
        return redirect(route('admin-gallery.index'))->with("success", 'Gallery Deleted Successfully');
    }
}
