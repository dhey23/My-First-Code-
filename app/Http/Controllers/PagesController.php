<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
        
    }

    public function about(){
        $title = 'About US!';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array ( 
        'title' => 'Services',
        'services' => ['Web design', 'Programming', 'SEO']
    );
        return view('pages.services') ->with($data);
    }

    public function create(){
        return view('posts.create')->with('title', $title);
    }

}

