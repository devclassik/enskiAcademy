<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillsAcademy;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
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
            Session::flash('success', "User logged in Successfully");
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
     * Show the form for courses.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        return view('skills-academy.courses');
    }

    /**
     * Store a newly created user in db.
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
        Session::flash('success', "User Created Successfully, Proceed to Login");
        return redirect('my-account');
    }

    /**
     * view the course upload page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function courseManage()
    {

        return view('skills-academy.course-manage');

    }

    /**
     * Store a newly created resources in the storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function courseUpload(Request $request)
    {
        $this->Validate($request,[
            'class'                 => 'required',
            'category'              => 'required',
            'title'                 => 'required',
            'price'                 => 'required',
            'bulletin'              => 'required',
            'description'           => 'required',
            'full_description'      => 'required',
            'picture'               => 'required',
            'video'                 => 'required',
        ]);
        if (SkillsAcademy::where('title', $request->title)->first())
        {
            Session::flash('title', "Title is already in use");
            return Redirect::back();
        }

        //for picture upload
        $pictureName = $request->picture->getClientOriginalName();
        $picturePath = 'videos/picture' . $pictureName;

        $isFileUploaded = Storage::disk('public')->put($picturePath, file_get_contents($request->picture));

        // File URL to access the video in frontend
        $urlOne = Storage::disk('public')->url($picturePath);

        //for video upload
        $videoName = $request->video->getClientOriginalName();
        $filePath = 'videos/videos' . $videoName;

        $isFileUploadedTwo = Storage::disk('public')->put($filePath, file_get_contents($request->video));

        // File URL to access the video in frontend
        $urlTwo = Storage::disk('public')->url($filePath);

//        if (){
//
//        }elseif (){
//
//        }

        if ($isFileUploaded && $isFileUploadedTwo) {
//            $image = new SkillsAcademy();
//            $image->title = $request->title;
//            $image->picture_path = $picturePath;
//            $image->save();

//            $video = new SkillsAcademy();
//            $video->title = $request->title;
//            $video->video_path = $filePath;
//            $video->save();
//
//            $video->class            = $request->class;
//            $video->category         = $request->category;
//            $video->title            = $request->title;
//            $video->price            = $request->price;
//            $video->bulletin         = $request->bulletin;
//            $video->description      = $request->description;
//            $video->full_description = $request->full_description;
//            $video->picture_path     = $urlOne;
//            $video->video_path       = $urlTwo;

            Session::flash('success', "Picture has been successfully uploaded.");
        }
//        Session::flash('error', "Unexpected error occured.");
//        return back();

//        if ($isFileUploadedTwo) {
//            $video = new SkillsAcademy();
//            $video->video_path = $filePath;
//            $video->save();
//
//            Session::flash('success', "Video has been successfully uploaded.");
//        }
//
//        return back()
//            ->with('error','Unexpected error occured');


        SkillsAcademy::create([
            'class'            => $request->class,
            'category'         => $request->category,
            'title'            => $request->title,
            'price'            => $request->price,
            'bulletin'         => $request->bulletin,
            'description'      => $request->description,
            'full_description' => $request->full_description,
            'picture_path'     => $picturePath,
            'video_path'       => $filePath,

        ]);
        Session::flash('success', "Course Uploaded Successfully,");
        return Redirect::back();

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

    public function shop()
    {
        return view('skills-academy.shop');
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
