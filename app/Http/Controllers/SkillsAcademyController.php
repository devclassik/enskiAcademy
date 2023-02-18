<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillsAcademy;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;
use Alert;

class SkillsAcademyController extends Controller
{

//    public function __construct()
//    {
//
//        if (Auth::guest()){
//            dd('guest');
////            Redirect::to('my-account')->send();
//        }
//        dd('no guest');
//    }
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
            Alert::success('Success', 'User logged in Successfully');
            return redirect('skills-academy');


        }
        Alert::error('Error', "Password and or email does not exist");
        return Redirect::back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('skills-academy.course-manage');
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

    public function graphics()
    {
        return view('skills-academy.graphics-design-course');
    }
    public function cryptoTrading()
    {
        return view('skills-academy.crypto-trading-course');
    }
    public function binaryTrading()
    {
        return view('skills-academy.binary-trading-course');
    }
    public function miniImportation()
    {
        return view('skills-academy.mini-importation-course');
    }
    public function forexTrading()
    {
        return view('skills-academy.forex-trading-course');
    }
    public function whatsappMonetization()
    {
        return view('skills-academy.whatsapp-marketing-course');
    }
    public function informationMarketing()
    {
        return view('skills-academy.information-marketing-course');
    }
    public function freelancing()
    {
        return view('skills-academy.freelancing-course');
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
            'name'        => 'required',
            'email'       => 'required',
            'occupation'  => 'required',
            'state'       => 'required',
            'gender'      => 'required',
            'tel'         => 'required|min:11',
            'password'    => 'required|min:6',
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
            'occupation' =>$request->occupation,
            'state' =>$request->state,
            'gender' =>$request->gender,
            'tel' => $request->tel,
            'password' => bcrypt($request->password)
        ]);
        Alert::success('Success', 'User Created Successfully, Proceed to Login!!!');
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
            'title'                 => 'required|unique:Skills_Academies,title',
            'price'                 => 'required',
            'bulletin'              => 'required',
            'description'           => 'required|min:10|max:100',
            'full_description'      => 'required|max:255',
            'picture'               => 'required',
            'curriculum'            => 'required'
        ]);

            //for icon upload
            $iconName = $request->icon->getClientOriginalName();
            $iconPath = 'videos/icon' . $iconName;
            $isFileUploaded = Storage::disk('public')->put($iconPath, file_get_contents($request->icon));

            // File URL to access the video in frontend
            $urlOne = Storage::disk('public')->url($iconPath);

            //for picture upload
            $pictureName = $request->picture->getClientOriginalName();
            $picturePath = 'videos/picture' . $pictureName;
            $isFileUploaded = Storage::disk('public')->put($picturePath, file_get_contents($request->picture));

            // File URL to access the video in frontend
            $urlOne = Storage::disk('public')->url($picturePath);

            //for video upload
//        $videoName = $request->video->getClientOriginalName();
//        $filePath = 'videos/videos' . $videoName;
//        $isFileUploadedTwo = Storage::disk('public')->put($filePath, file_get_contents($request->video));

            // File URL to access the video in frontend
//        $urlTwo = Storage::disk('public')->url($filePath);


        $id = SkillsAcademy::create([
            'class'            => $request->class,
            'category'         => $request->category,
            'title'            => $request->title,
            'price'            => $request->price,
            'bulletin'         => $request->bulletin,
            'description'      => $request->description,
            'full_description' => $request->full_description,
            'icon_path'        => $iconPath,
            'picture_path'     => $picturePath,
//            'video_path'       => $filePath,
            'curriculum'       => $request->curriculum

        ]);

        $lastId = $id->id;
        Alert::success('Success', 'Course Uploaded Successfully!!!');
        return redirect('file/'.$lastId);
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

    public function shop($id)
    {
        $shops = SkillsAcademy::find($id);
        $courses = SkillsAcademy::latest()->paginate(6);
        return view('skills-academy.shop', compact('shops','courses'));
    }
    public function shops()
    {
//        $shops = SkillsAcademy::all()->random(20)->paginate(10);
        $courses = SkillsAcademy::latest()->paginate(10);
        return view('skills-academy.shops', compact('courses'));
    }

    public function cart($id)
    {
        $courses = SkillsAcademy::find($id);
        return view('skills-academy.cart', compact('courses'));
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
    function checkout()
    {
        return view('skills-academy.checkout');
    }
    public function dashboard(){
        return view('skills-academy.student-dashboard');
    }
}
