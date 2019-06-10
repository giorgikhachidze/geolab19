<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $variable = 15;

        for($i = 0; $i <= $variable; $i++) {

            DB::table("posts")->insert([
                "name"  => Str::random(10),
                "description"   => Str::random(100),
                "is_published"  => mt_rand(1,3)
            ]);
        
        }


    }
}
