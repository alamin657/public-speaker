<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use App\Models\Blog;

class BlogController extends Controller
{
   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get()->all();
        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'nullable',
            'sub_title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
        ];

        $this->validate($request, $rules);

        $blogs = new Blog();

        $blogs->title = $request['title'];
        $blogs->sub_title = $request['sub_title'];
        $blogs->description = $request['description'];
        //$blogs->image = $request['image'];


        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {

                $extension = $image_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/blogs/' . $imageName;
                Image::make($image_temp)->resize(300, 200)->save($imagePath);

                $blogs->image = $imageName;
            }
        }

        $blogs->save();

        // return redirect()->back()->with('success', 'Gallery created successfully!');
        return redirect()->route('admin-blog.index')->with('success', 'Blog  added successfully.');
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
        $blogs  = Blog::where('id', $id)->get()->first();
        return view('backend.blogs.edit')->with(compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $rules = [
            'title' => 'nullable',
            'sub_title' => 'nullable',
            'description' => 'nullable',
        ];

        $this->validate($request, $rules);
        $blogs = Blog::findorFail($id);


        $blogs->title = $request['title'];
        $blogs->sub_title = $request['sub_title'];
        $blogs->description = $request['description'];


        if ($request->hasFile('image')) {
            $exists = 'images/blogs/' . $blogs->image;
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
                $imagePath = 'images/blogs/' . $imageName;
                Image::make($image_temp)->resize(300, 200)->save($imagePath);
                $blogs->image = $imageName;
            }
        }



        $blogs->update();

        return redirect()->route('admin-blog.index')->with('success', 'blogs updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blog::findorFail($id);
        $exists = 'images/blogs/' . $blogs->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $blogs->delete();
        
        return redirect(route('admin-blog.index'))->with("success", 'Blog Deleted Successfully');
    }
} 

