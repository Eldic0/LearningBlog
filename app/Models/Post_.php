<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Michael Rivaldo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae atque reiciendis explicabo debitis voluptate dolorum voluptatem ex nulla? Nulla debitis, ipsam laborum dolorem asperiores velit adipisci. Eaque atque laudantium veritatis!"
            
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mantap Kali",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae atque reiciendis explicabo debitis voluptate dolorum voluptatem ex nulla?asdasdasdasdasdasdasdas Nulla debitis, ipsam laborum dolorem asperiores velit adipisci. Eaque atque laudantium veritatis!"
            
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        

    return $posts->firstWhere('slug', $slug);
    }
}
