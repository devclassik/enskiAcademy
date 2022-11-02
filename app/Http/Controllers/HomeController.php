<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\SkillsAcademy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Alert;


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
        $skills = SkillsAcademy::all()->random(3);
        $blogs = Blog::latest()->paginate(6);
        return view('homepage', compact('blogs','skills'));
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
            'tag'             => 'required',
            'title'           => 'required',
            'phaseOne'        => 'required|unique:blogs',
            'phaseFour'       => 'required',
            'phaseFive'       => 'required',

        ]);
        if (Blog::where('title', $request->title)->first())
        {
            Alert::error('Oops!', 'Title is already in use');
            return Redirect::back();
        }
        Blog::create(
            // $request->all()
            [
                'image_path'     =>$picturePath,
                'tag'            =>$request->tag,
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
        Alert::success('Success', 'New Blog Added Successfully!!!');
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
        $blogs = Blog::latest()->paginate(10);
        return view('blog', compact('blogs'));
    }

    /** this is the function that control the blog page*/
    /** this is the function that control the blog Details page*/
    public function blogDetails($id)
    {
        $blogger = Blog::find($id);
        $blogs = Blog::latest()->paginate(5);
//        dd($blogs);
        return view('blog-details', compact('blogs','blogger'));
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
