<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Backend\UserType;
use App\Models\Backend\Address;
use App\Models\Backend\Skill;
use App\Models\Backend\SocialMedia;
use Auth;
class UserController extends Controller
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

    //all user manage by admin
    public function all()
    {
        $users       = User::orderBy('name','asc')->get();

        return view('backend.pages.users.all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userTypes       = UserType::orderBy('name','desc')->get();   
        return view('frontend.pages.registation.registation',compact('userTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
        ],
        [
            
        ]);
            $user                       = new User();
            $user->email                = $request->email;
            $user->password             = Hash::make($request->password);
            $user->user_type_id         = $request->account_type;
            $user->save();

            //Address table
            $address                    = new Address();
            $address->user_id         =$user->id;
            $address->save();

            //skill table
            $skill                      = new Skill();
            $skill->user_id             = $user->id;
            $skill->save();

            //social media table
            $socialMedia                = new SocialMedia();
            $socialMedia ->user_id      = $user->id;
            $socialMedia->save();
            return redirect()->route('home.page');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
