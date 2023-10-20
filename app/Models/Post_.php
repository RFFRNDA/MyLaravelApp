<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ut suscipit. Tenetur officia vel tempora fuga impedit dignissimos, quo culpa harum minus nemo voluptates asperiores. Laudantium quidem reprehenderit tenetur aut est, corporis molestiae repellat eaque, eos a error rem provident ipsum ipsam ex! Rem nulla doloribus beatae consequuntur illo cupiditate. Repellendus expedita assumenda minus iste, asperiores, sunt sed voluptas, possimus quaerat ullam ducimus hic veniam culpa? Ea voluptas id ex libero voluptatibus perspiciatis quo odio, accusantium voluptate, voluptatum debitis fugit."
        ],
        [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ut suscipit. Tenetur officia vel tempora fuga impedit dignissimos, quo culpa harum minus nemo voluptates asperiores. Laudantium quidem reprehenderit tenetur aut est, corporis molestiae repellat eaque, eos a error rem provident ipsum ipsam ex! Rem nulla doloribus beatae consequuntur illo cupiditate. Repellendus expedita assumenda minus iste, asperiores, sunt sed voluptas, possimus quaerat ullam ducimus hic veniam culpa? Ea voluptas id ex libero voluptatibus perspiciatis quo odio, accusantium voluptate, voluptatum debitis fugit. Ea voluptas id ex libero voluptatibus perspiciatis quo odio, accusantium voluptate, voluptatum debitis fugit."
        ]
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
