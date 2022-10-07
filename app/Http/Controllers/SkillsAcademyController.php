<?php

namespace App\Http\Controllers;

use App\Models\SkillsAcademy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;

class SkillsAcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('skills-academy.skills-academy');
    }
     //for registration
    public function register()
    {
        return view('auth.login');
    }

    //user registration and login
    public function userLogin()
    {
        return view('skills-academy.my-account');
    }
    public function elogin(Request $request)
    {
        $this->Validate($request,[
            'lemail'    => 'required',
            'lpassword' => 'required|min:6',
        ]);
        $userdata = array(
            'email'  => $request->lemail,
            'password' => $request->lpassword,
        );

        if (Auth::attempt($userdata)){
            Session::flash('success', "User logged in succefully");
            return redirect('skills-academy');
        }
        Session::flash('error', "password and or email doesnt match");
        return Redirect::back();
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
        $this->Validate($request,[
            'name'     => 'required',
            'email'    => 'required',
            'tel'      => 'required|min:11',
            'password' => 'required|min:6',
        ]);
        if (User::where('email', $request->email)->first())
        {
            Session::flash('email', "email is already in use");
            return Redirect::back();
        }
        if ($request->password != $request->cpassword){
            Session::flash('password', "Password and Confirm Password does not match");
            return Redirect::back();
        }
        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => bcrypt($request->password)
        ]);
        Session::flash('success', "User Created Succefully, Proceed to Login");
        return redirect('my-account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsAcademy  $skillsAcademy
     * @return \Illuminate\Http\Response
     */
    public function show(SkillsAcademy $skillsAcademy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsAcademy  $skillsAcademy
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillsAcademy $skillsAcademy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsAcademy  $skillsAcademy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillsAcademy $skillsAcademy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsAcademy  $skillsAcademy
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillsAcademy $skillsAcademy)
    {
        //
    }

    /**this is the method that logout user*/
    function doLogout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('/my-account'); // redirection to login screen
    }

}
