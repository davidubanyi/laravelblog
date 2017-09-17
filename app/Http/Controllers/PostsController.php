<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //view for the index directory
    public function index()

    {

    	return view('posts.index');
    }

}
