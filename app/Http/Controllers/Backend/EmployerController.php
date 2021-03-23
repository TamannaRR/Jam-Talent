<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Backend\Address;
use App\Models\Backend\Skill;
use App\Models\Backend\SocialMedia;
use Image;
use File;
use Auth;
class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // all freelancer show in admin 

    public function all()
    {
        $employers = User::orderBy('id','asc')->where('user_type_id',3)->get();
        return view('backend.pages.admin.allEmployer',compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $employer = User::find(Auth::user()->id);
        return view('backend.pages.employer.edit',compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $employer = User::find(Auth::user()->id);
        $employer->email                = $request->email;
        $employer->first_name           = $request->first_name;
        $employer->last_name            = $request->last_name;
        $employer->sort_description     = $request->sort_description;
        $employer->description          = $request->description;
        if ($request->image) {
            $image                  = $request->file('image');
            $img                    = time() . '.' . $image->getClientOriginalExtension();
            $location               = public_path('images/employer/' . $img);
            Image::make($image)->save($location);
            $employer->image            = $img;
        }

        $employer->save();
        return redirect()->route('employer.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
