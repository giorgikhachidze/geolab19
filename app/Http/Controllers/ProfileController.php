<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Postttttt;

class ProfileController extends Controller
{


    public function showProfile(Request $request){


        $post = Post::all();

        dd($post);










        $insert = Postttttt::create([
            "name"  => "aaaaaaaaffffsssssskkkk",
            "description"   => "Dasdsadsa",
            "is_published"  => 1
        ]);

        dd($insert);

        // $post = Postttttt::withoutGlobalScopes([
        //     \App\Scopes\FilterUpdatedAt::class,
        //     \App\Scopes\FilterIsPublished::class
        // ]            
        // )->get();

        // dd($post);


        $resp = Postttttt::where("id", 3)->forceDelete();

        $deletedPosts = Postttttt::onlyTrashed()->get();

        dd($deletedPosts);

        $table = new Postttttt();

        // $table->name = "test123asdsadasdas";
        // $table->description = "descriptionasd12edassadas";
        // $table->is_published = 112112;
        // $table->save();

        dd($table);

        dd($insertPost);
        

        // $stringCollect = collect(["SDasd!", "dsaAA", "dasdasda"]);

        
        // $upper =  $stringCollect->toUpper();

        // $upper = $stringCollect->map(function ($value) {
        //     return Str::upper($value);
        // });
        
        // dd($upper);

        $array = [1, 2, 3, 4];    

        $collection = collect($array);

        dd($collection->contains(3000));

        $collection = $collection->filter(function($value, $key){
            return $value % 2 == 0;
        });

        dd($collection);

        $table= Post::All();

        // $filtered= $table->map(function($value, $key){
            
        //     $value->name = "dasdss";
            
            
        //     return $value;
        // });

        // dd($filtered);

        return view("profile.index", ['filtered'=> $filtered]);
    }
}



