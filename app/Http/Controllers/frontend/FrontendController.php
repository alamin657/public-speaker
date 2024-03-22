<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Award;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Education;
use App\Models\gallery;
use App\Models\Portfolio;
use App\Models\PorfolioCategory;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get()->all();
        $counters = Counter::take(4)->get()->all();
        $abouts = About::get()->all();
        $galleries =gallery::take(3)->get()->all();
        return view('frontend.index', compact('banners', 'counters','abouts', 'galleries')); 
    }
    // public function show($id)
    // {
    //     $galleries = gallery::find($id);
    //     return view('frontend.gallery', compact('galleries'));
    // }
    public function about()
    {
        $abouts = About::get()->all();
        return view('frontend.about', compact('abouts'));
    }
    public function skills()
    {
        $skills = Skill::get()->all();
        return view('frontend.skills', compact('skills'));
    }
    public function education()
    {
        $educations = Education::get()->all();
        return view('frontend.education', compact('educations'));
    }
    public function portfolio()
    {
        $portfolios = Portfolio::get()->all();
        $portfoliocategories = PorfolioCategory::get()->all();
        return view('frontend.portfolio', compact('portfolios', 'portfoliocategories'));
    }
    public function award()
    {
        $awards = Award::get()->all();
        return view('frontend.awards', compact('awards'));
    }

    public function project()
    {
        $projects = Project::get()->all();
        return view('frontend.project', compact('projects'));
    }

    public function gallery()
    {
        $galleries = gallery::get()->all();
        return view('frontend.gallery', compact('galleries'));
    }
    public function contact()
    {
        $contacts = Contact::get()->all();
        return view('frontend.contact', compact('contacts'));
    }
    public function blog()
    {
        $blogs = Blog::get()->all();
        return view('frontend.blog', compact('blogs'));
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
        //dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ];

        $this->validate($request, $rules);

        $contacts = new Contact();

        $contacts->name = $request['name'];
        $contacts->email = $request['email'];
        $contacts->phone = $request['phone'];
        $contacts->address = $request['address'];
        $contacts->message = $request['message'];


        $contacts->save();

        return redirect()->route('frontend.contact')->with('success', 'Contact  added successfully.');
       // return redirect(route('frontend.contact'))->with('success', 'Contact  added successfully.');
       //return view('frontend.home');
    
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $contacts  = Contact::where('id', $id)->get()->first();
        // return view('backend.contact.edit')->with(compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // dd($request->all());

        //  $rules = [
        //     'name' => 'required',
        //     'email' => 'email|required',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'message' => 'required',
        // ];

        // $this->validate($request, $rules);

        // // $gallery = gallery::Where('id', $id)->findorFail();
        // $contacts = contact::findorFail($id);

 
        // $contacts->name = $request['name'];
        // $contacts->email = $request['email'];
        // $contacts->phone = $request['phone'];
        // $contacts->address = $request['address'];
        // $contacts->message = $request['message'];
 
        // $contacts->update();

        // return redirect()->route('backend.contact.index')->with('success', 'Contct entry added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
