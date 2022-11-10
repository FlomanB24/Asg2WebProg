<?php

namespace App\Models;

class Port 
{
    private static $myporto = [
        [
            "image" => "entre.jpg",
            "title" => "Portofolio Pertama",
            "name" => "Project Entrepreneurship",
            "subtitle" => "project-entrepreneurship",
            "description" => "Amet dicta numquam modi voluptate odio velit ipsum dolores veniam, tempora, cum corrupti sunt impedit expedita earum animi consectetur tenetur quaerat laboriosam repellendus provident? "
        ],
    
        [
            "image" => "web.jpg",
            "title" => "Portofolio Kedua",
            "name" => "Project Human and Computer Interaction",
            "subtitle" => "project-human-and-computer-interaction",
            "description" => "Nostrum minima officia consequatur ipsam dolorum impedit qui. Quas cumque nihil molestias voluptatibus."
        ],

        [
            "image" => "prog.jpg",
            "title" => "Portofolio Ketiga",
            "name" => "Project Web Programming",
            "subtitle" => "project-web-programming",
            "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt."
        ],
        [
            "image" => "grafis.jpg",
            "title" => "Portofolio Kelima",
            "name" => "Project Design Graphic",
            "subtitle" => "project-design-graphic",
            "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt, minus commodi laudantium sed."
        ]
    ];

    public static function all() 
    {
        return collect(self::$myporto);
    }

    public static function find($subtitle) 
    {
        // return self::$myporto;
        // $ports = self::$myporto;
        $ports = static::all();
        // $myportfolio = [];
        // foreach ($ports as $port){
        //     if($port["subtitle"] === $subtitle){
        //         $myportfolio = $port;
        //     }
        // }
        // return $myportfolio;
        return $ports->firstWhere('subtitle', $subtitle);
    }
}
