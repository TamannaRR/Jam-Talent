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
class FreelancerController extends Controller
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
        $freelancers = User::orderBy('id','asc')->where('user_type_id',1)->get();
        return view('backend.pages.admin.allFreelancer',compact('freelancers'));
    }
    // valid the freelancer
    public function active($id)
    {
        $freelancer = User::find($id);
        $freelancer->verified = 1;
        $freelancer->save();
        return redirect('user.dashbord');
    }
    public function enActive($id, Request $request)
    {
        $freelancer = User::find($id);
        $freelancer->verified = 0;
        $freelancer->save();
        return redirect('user.dashbord');
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
         //$freelancer = Freelancer:: where('user_id',Auth::user()->user_id);
        $user = User::find(Auth::user()->id);
        return view('backend.pages.freelancer.edit',compact('user'));
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
        $user = User::find(Auth::user()->id);
        $user->email                = $request->email;
        $user->first_name           = $request->first_name;
        $user->last_name            = $request->first_name;
        $user->language             = $request->first_name;
        $user->sort_description     = $request->sort_description;
        $user->description          = $request->description;
        if ($request->image) {
            $image                  = $request->file('image');
            $img                    = time() . '.' . $image->getClientOriginalExtension();
            $location               = public_path('images/freelancer/' . $img);
            Image::make($image)->save($location);
            $user->image            = $img;
        }

        $full_name = $request->first_name . $request->last_name;

        $user->hourly_rate          = $request->hourly_rate;
        if ( $request->file ) {
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
            $user->file             = $fileName;
        }
        $user->save();
        return redirect()->route('user.dashbord');

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
