<?php

namespace App\Models;

class Article 
{
    public static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-vs-rusia",
            "author"=> "Russia Today",
            "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author"=> "Pemuda Pancasila Bogor",
            "body" => "Omicron - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],
    ]; 

    public static function all(){
        return self::$articles;
    }

    public function find($slug){
        $articles = static::all();
        
        return $articles->firstWhere('slug', $slug);
    }
}
