<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.blog.create");
    }

            //Display File Name
        // echo 'File Name: '.$file->getClientOriginalName();
        // echo '<br>';
    
        // //Display File Extension
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo '<br>';
    
        // //Display File Real Path
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';
    
        // //Display File Size
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';
    
        // //Display File Mime Type
        // echo 'File Mime Type: '.$file->getMimeType();s

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            "body"  => "required",
            "sub_title" => "required"
        ], [
            "title.required"    => "სათაურის შეყვანა სავალდებულოა",
            "body.required"    => "აღწერის შეყვანა სავალდებულოა",
            "sub_title.required"    => "ქვე სათაურის შეყვანა სავალდებულოა"
        ]);        

        $inputs = $request->all();        
        $inputs["author"] = Auth::user()->name;

        $blog = Blog::create([
            "title" => $inputs["title"],
            "sub_title" => $inputs["sub_title"],
            "body"  => $inputs["body"],
            "is_published"  => array_key_exists("is_published",$inputs) ? $inputs["is_published"] : 2,
            "author"    => $inputs["author"]
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
