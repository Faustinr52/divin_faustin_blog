<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class HomeController extends Controller
{
    //
    function index()
    {
        $myposts = \App\Post::orderBy('post_date', 'desc')->take(3)->get();; 
        return view('welcome',array(
            'posts' => $myposts
        ));
    }

   
}
