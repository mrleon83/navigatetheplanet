<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Places;
use \App\BlogText;

class DataController extends Controller
{
    public function storeplace(){
        $places = new places();

        $places->country = request('country');
        $places->town = request('town');
        $places->datefrom = request('datefrom');
        $places->dateto = request('dateto');
        $places->save();

        $first_blog = \App\BlogText::all()->last();
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('blogplaces', ['first_blog' => $first_blog, 'places'=>$places]);
    }

    public function storeblog(){
        $blog = new BlogText();

        $blog->place = request('place');
        $blog->town =request('town');
        $blog->title = request('title');
        $blog->blogpost = request('blogpost');
        $blog->private = request('private');
        $blog->username = request('username');
        $blog->photoname = $blog->title.'_image';
        $blog->alttext = request('alttext');
        $blog->date = request('date');

        $blog->photoname = $blog->title.'_image'.$blogid;
        $blog->photoname = str_replace(' ', '', $blog->photoname);
        $blog->photoname = preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($blog->photoname));

        $filetype = request()->file('photolink')->getClientOriginalExtension();
        $blog->photolink = '/blogimageupload/'.$blog->place.'/'.$blog->photoname.'.'.$filetype;
        request()->file('photolink')->storeAs('public/blogimageupload/'.$blog->place, $blog->photoname.'.'.$filetype);
        $blog->save();

        $first_blog = \App\BlogText::all()->last();
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('blogplaces', ['first_blog' => $first_blog, 'places'=>$places]);
    }

    public function updateblog(){
        $blog =  new BlogText();
        $blogid = request('blogid');
        $blog = $blog::find($blogid);

        $blog->place = request('place');
        $blog->town =request('town');
        $blog->title = request('title');
        $blog->blogpost = request('blogpost');
        $blog->private = request('private');
        $blog->username = request('username');
        $blog->alttext = request('alttext');
        $blog->date = request('date');

        $blog->photoname = $blog->title.'_image'.$blogid;
        $blog->photoname = str_replace(' ', '', $blog->photoname);
        $blog->photoname = preg_replace('/[^A-Za-z0-9 !@#$%^&*().]/u','', strip_tags($blog->photoname));

        if(request()->file('photolink')){
            $filetype = request()->file('photolink')->getClientOriginalExtension();
            $blog->photolink = '/blogimageupload/'.$blog->place.'/'.$blog->photoname.'.'.$filetype;
            request()->file('photolink')->storeAs('public/blogimageupload/'.$blog->place, $blog->photoname.'.'.$filetype);
        }

        $blog->save();

        $first_blog = \App\BlogText::all()->last();
        $places = \App\BlogText::select('place')->distinct('place')->get();
        return view('blogplaces', ['first_blog' => $first_blog, 'places'=>$places]);

    }
}
