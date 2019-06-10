<?php

use Illuminate\Database\Seeder;
use App\Blog;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 0; $i <= 9; $i++) {
            Blog::create([
                "title" => Str::random(6),
                "sub_title" => Str::random(10),
                "author" => Str::random(10),
                "publish_date"  => now(),
                "body"  => Str::random(200),
                "image" => "front/img/home-bg.jpg",
                "is_published"  => mt_rand(1,2)
            ]);
        }
    }
}
