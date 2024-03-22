<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
// use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get()->all();
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        if ($request->hasFile('image')) {
            $img_temp = $request->file('image');
            if ($img_temp->isValid()) {
                $extension = $img_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/banner/' . $imageName;
                Image::make($img_temp)->resize(500, 400)->save($imagePath);
                $banner->image = $imageName;
            }
        }
        $banner->save();
        return redirect()->route('admin-banner.index')->with('success', 'Banner entry added successfully.');
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
        $banner = Banner::where('id', $id)->get()->first();
        return view('backend.banner.edit')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::findorFail($id);

        if ($request->hasFile('image')) {
            $exists = 'images/banner/' . $banner->image;
            if (File::exists($exists)) {
                File::delete($exists);
            }
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/banner/' . $imageName;
                Image::make($image_temp)->resize(500, 400)->save($imagePath);
                $banner->image = $imageName;
            }
        }

        $banner->update();

        return redirect()->route('admin-banner.index')->with('success', 'Banner entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::findorFail($id);
        $exists = 'images/banner/' . $banner->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $banner->delete();
        $message  = "banner Delete Successfully Done";
        return redirect(route('admin-banner.index'))->with("success", $message);
    }
}
