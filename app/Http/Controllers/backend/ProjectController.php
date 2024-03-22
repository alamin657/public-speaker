<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get()->all();
        return view('backend.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.create');
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

        $project = new Project();

        $project->title = $request['title'];
        $project['url'] = $request->video;
        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {

                $extension = $image_temp->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/project/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);

                $project->image = $imageName;
            }
        }

        
        $project->save();
        return redirect()->route('admin-project.index')->with('success', 'project entry added successfully.');
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
        $project  = Project::where('id', $id)->get()->first();
        return view('backend.project.edit')->with(compact('project'));
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

        // $project = project::Where('id', $id)->findorFail();
        $project = Project::findorFail($id);


        $project->title = $request['title'];
        $project['url'] = $request->video;


        if ($request->hasFile('image')) {
            $exists = 'images/project/' . $project->image;
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
                $imagePath = 'images/project/' . $imageName;
                Image::make($image_temp)->resize(350, 265)->save($imagePath);
                $project->image = $imageName;
            }
        }



        $project->update();

        return redirect()->route('admin-project.index')->with('success', 'project entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findorFail($id);
        $exists = 'images/project/' . $project->image;
        if (File::exists($exists)) {
            File::delete($exists);
        }
        $project->delete();
        $message  = "project Delete Successfully Done";
        return redirect(route('admin-project.index'))->with("success", $message);
    }
}
