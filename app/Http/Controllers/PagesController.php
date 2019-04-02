<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $first_blog = \App\BlogText::all()->last();
        //$places = \App\BlogText::select('place')->distinct('place')->get();
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('home', ['first_blog' => $first_blog, 'places'=>$places]);
    }

    public function blogs(Request $request){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $blogs = \App\BlogText::all()->where('place', '=', $request->place)->sortByDesc('date');
        $country = $request->place;
        return view('blogs', ['blogs' => $blogs, 'places'=>$places,'country'=>$country]);
    }
    public function blog(Request $request){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $blogs = \App\BlogText::all()->where('id', '=', $request->id);
        return view('blog', ['blogs' => $blogs, 'places'=>$places]);
    }
    public function blogplaces(){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $blogs = \App\BlogText::all();
        return view('blogplaces', ['places'=>$places]);
    }
    public function aboutus(){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('aboutus',['places'=>$places]);
    }
    public function gallery(){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $images = \App\BlogText::all()->where('photolink', '!=', '')->take(1);
        return view('gallery',['images'=>$images, 'places'=>$places]);
    }

    //admin area stuff
    public function editblog(Request $request){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $blogs = \App\BlogText::all()->where('id', '=', $request->id);
        return view('editblog', ['blogs' => $blogs, 'places'=>$places, 'blogid'=>$request->id]);
    }
    public function newplace(){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $newplaces = \App\Places::all();
        return view('newplace',['places'=>$places,'newplaces'=>$newplaces]);
    }
    public function newblog(){
        $places = \App\BlogText::select('place')->distinct('place')->get();
        $newplaces = \App\Places::all();
        return view('newblog',['places'=>$places, 'newplaces'=>$newplaces]);
    }
}
