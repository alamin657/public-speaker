<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
// use Image;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::get()->all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'nullable',
            'title' => 'nullable',
            'description' => 'required',
        ];
        $this->validate($request, $rules);

        $about = new About();

        $about->name = $request['name'];
        $about->title = $request['title'];
        $about->description = $request['description'];

        if ($request->hasFile('image')) {
            $image_team = $request->file('image');
            if ($image_team->isValid()) {
                $extention = $image_team->getClientOriginalExtension();
                $imageName = time() . '.' . $extention;
                $imagePath = 'images/about/' . $imageName;
                Image::make($image_team)->resize(800, 800)->save($imagePath);

                $about->image = $imageName;
            }
        }
        $about->save();

        return redirect()->route('admin-about.index')->with('success', 'about information successfully');
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
        $about = About::Where('id', $id)->get()->first();
        return view('backend.about.edit')->with(compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'nullable',
            'title' => 'nullable',
            'description' => 'required',
        ];
        $this->validate($request, $rules);

        $about = About::findorFail($id);
        $about->name = $request['name'];
        $about->title = $request['title'];
        $about->description = $request['description'];

        if ($request->hasFile('image')) {
            $exists = 'images/about/' . $about->image;
            if (File::exists($exists)) {
                File::delete($exists);
            }
            $image_team = $request->file('image');
            if ($image_team->isValid()) {
                $extention = $image_team->getClientOriginalExtension();
                $imageName = time() . '.' . $extention;
                $imagePath = 'images/about/' . $imageName;
                Image::make($image_team)->resize(800, 800)->save($imagePath);
                $about->image = $imageName;
            }
        }

        $about->update();
        return redirect()->route('admin-about.index')->with('about', 'about information successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findorFail($id);
        $exists = 'images/about/' . $about->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $about->delete();
        $meassge = 'about information delete successfully';
        return redirect()->route('admin-about.index')->with('success', $meassge);
    }
}
