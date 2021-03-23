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
class AdminController extends Controller
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
        $admin = User::find(Auth::user()->id);
        return view('backend.pages.admin.edit',compact('admin'));
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
        $admin = User::find(Auth::user()->id);
        $admin->email                = $request->email;
        $admin->first_name           = $request->first_name;
        $admin->last_name            = $request->last_name;
        $admin->sort_description     = $request->sort_description;
        $admin->description          = $request->description;
        if ($request->image) {
            $image                  = $request->file('image');
            $img                    = time() . '.' . $image->getClientOriginalExtension();
            $location               = public_path('images/employer/' . $img);
            Image::make($image)->save($location);
            $admin->image            = $img;
        }

        $admin->save();
        return redirect()->route('admin.edit');
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
