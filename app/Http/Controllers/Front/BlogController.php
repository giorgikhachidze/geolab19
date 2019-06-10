<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    
    public function index()
    {        
        $blogs = Blog::paginate(3);

        return View("front.index", compact('blogs'));
    }

    public function article($id, $title = ""){

        $blog = Blog::findOrFail($id);

        return View("front.article", compact("blog"));        
    }

}
