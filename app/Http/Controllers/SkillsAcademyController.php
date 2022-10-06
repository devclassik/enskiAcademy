<?php

namespace App\Http\Controllers;

use App\Models\SkillsAcademy;
use Illuminate\Http\Request;

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
    public function userRegistration()
    {
        return view('skills-academy.my-account');
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
}
