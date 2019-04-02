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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $first_blog = \App\BlogText::all()->last();
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('home', ['first_blog' => $first_blog, 'places'=>$places]);
    }
}
