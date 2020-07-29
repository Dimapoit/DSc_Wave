<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main', ['page'=>'main']);
    }

    public function about()
    {
        return view('about', ['page'=>'about']);
    }

    public function aboutData()
    {
        return view('about', ['page'=>'about']);
    }

    public function services()
    {
        return view('services', ['page'=>'services']);
    }

    public function blog()
    {
        return view('blog', ['page'=>'blog']);
    }

    public function gallery()
    {
        return view('gallery', ['page'=>'gallery']);
    }

    public function contact()
    {
        return view('contact', ['page'=>'contact']);
    }
}
