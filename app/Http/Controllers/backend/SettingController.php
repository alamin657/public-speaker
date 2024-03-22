<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicSettings;
// use Intervention\Image\ImageManagerStatic as Image;
use Image;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        // dd('page');
       $settings = BasicSettings::get()->first();
       return view('backend.setting.index',compact('settings'));
    }


    public function update(Request $request)
    {

        $setting = BasicSettings::find(1);
            $setting->bs_title = $request->bs_title;
            $setting->bs_address = $request->bs_address;
            $setting->bs_phone = $request->bs_phone;
            $setting->bs_email = $request->bs_email;
            $setting->bs_facebook = $request->bs_facebook;
            $setting->bs_youtube = $request->bs_youtube;
            $setting->bs_instagram = $request->bs_instagram;
            $setting->bs_twitter = $request->bs_twitter;
            $setting->bs_linkedin = $request->bs_linkedin;
            $setting->bs_footertext = $request->bs_footertext;
            $setting->bs_map = $request->bs_map;

            if($request->hasFile('bs_logo')){
                $exists = 'images/logo/'.$setting->bs_logo;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('bs_logo');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/logo/'.$imageName;
                    Image::make($image_temp)->resize(600,600)->save($imagePath);
                    $setting->bs_logo = $imageName;
                }
            }

// Favicon

if($request->hasFile('bs_favicon')){
    $exists = 'images/favicon/'.$setting->bs_favicon;
    if(File::exists($exists))
    {
        File::delete($exists);
    }
    $image_temp = $request->file('bs_favicon');
    if($image_temp->isValid()){
        //Get Image Extension
        $extension = $image_temp->getClientOriginalExtension();
        //Generate New Image Name
        $imageName = time().'.'.$extension;
        $imagePath = 'images/favicon/'.$imageName;
        Image::make($image_temp)->resize(600,600)->save($imagePath);
        $setting->bs_favicon = $imageName;
    }
}
        
        $setting->save();
        $notification = array(
            'message' => 'Setting Updated!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
