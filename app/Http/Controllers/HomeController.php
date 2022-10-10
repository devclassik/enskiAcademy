<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homepage');
    }


    /**
     * Show the blogMange.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogManage()
    {
        return view('blog-manage');
    }



    /**
     * Show the blogMange.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogUpdate(Request $request)
    {
        //for picture upload
        $pictureName = $request->picture->getClientOriginalName();
        $picturePath = 'blog/' . $pictureName;

        $isFileUploaded = Storage::disk('public')->put($picturePath, file_get_contents($request->picture));

        // File URL to access the video in frontend
        $urlOne = Storage::disk('public')->url($picturePath);

        $this->Validate($request,[
            'title'           => 'required',
            'phaseOne'        => 'required',
            'phaseTwo'        => 'required',
            'phaseTwoB'       => 'required',
            'phaseThree'      => 'required',
            'phaseThreeB'     => 'required',
            'phaseFour'       => 'required',
            'phaseFive'       => 'required',

        ]);
        if (Blog::where('title', $request->title)->first())
        {
            Session::flash('title', "Title is already in use");
            return Redirect::back();
        }
        Blog::create(
            // $request->all()
            [
                'image_path'     =>$picturePath,
                'title'          => $request->title,
                'phaseOne'       => $request->phaseOne,
                'phaseTwo'       => $request->phaseTwo,
                'phaseTwoB'      => $request->phaseTwoB,
                'phaseThree'     => $request->phaseThree,
                'phaseThreeB'    => $request->phaseThreeB,
                'phaseFour'      => $request->phaseFour,
                'phaseFive'      => $request->phaseFive,
            ]
        );
        Session::flash('Success', "Message sent Successfully!!!");
        return redirect::back();

    }


    /** this is the function that control the about page*/
    public function about()
    {
        return view('home-about');
    }

    /** this is the function that control the contact page*/
    public function contact()
    {
        return view('home-contact');
    }

    /** this is the function that control the blog page*/
    public function blog()
    {
        return view('blog');
    }

    /** this is the function that control the blog page*/
    /** this is the function that control the blog Details page*/
    public function blogDetails()
    {
        return view('blog-details');
    }

    /** this is the function that control the error page*/
    public function errorPage()
    {
        return view('error');
    }

    /** this is the function that control the faq page*/
    public function faq()
    {
        return view('faq');
    }

    /** this is the function that control view of coming soon page*/
    public function comingSoon()
    {
        return view('coming-soon');
    }

    /** this is the function that control adding of new blog page*/
    public function blogAddNew(Request $request)
    {
        $this->Validate($request,[
            'title'          => 'required',
            'phaseOne'       => 'required',
            'phaseTwo'       => 'required',
            'phaseTwoB'      => 'required',
            'phaseThree'     => 'required',
            'phaseThreeB'    => 'required',
            'phaseFour'      => 'required',
            'pahseFive'      => 'required|min:6',
        ]);
        // $userdata = array(
        //     'email'  => $request->lemail,
        //     'password' => $request->lpassword,
        // );

        if (BlogPost::where('title', $request->title)->first())
        {
            Session::flash('title', "Title is already in use");
            return Redirect::back();
        }
        User::create([
            'title'          => $request->title,
            'phaseOne'       => $request->phaseOne,
            'phaseTwo'       => $request->phaseTwo,
            'phaseTwoB'      => $request->phaseOneB,
            'phaseThree'     => $request->phaseThree,
            'phaseThreeB'    => $request->phaseThreeB,
            'phaseFour'      => $request->phaseFour,
            'pahseFive'      => $request->phaseFive,
        ]);
        Session::flash('Success', "Blog Post Created Successfully!!!");
        return redirect('bloq-manage');
    }
    /** this is the function that control contact us page*/
    public function contactUs(Request $request)
    {
        $this->Validate($request,[
            'name'          => 'required',
            'email'       => 'required',
            'tel'       => 'required|min:11',
            'type'      => 'required',
            'message'     => 'required|min:10',
        ]);
        ContactUs::create( $request->all());
        Session::flash('Success', "Message sent Successfully!!!");
        return redirect('homepage');
    }
}
