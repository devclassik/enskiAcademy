<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
