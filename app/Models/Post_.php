<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Paiz Abdul Jabar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nulla consequuntur quasi fugiat cupiditate sequi ea fugit, nisi officiis vitae aspernatur officia quo rem, quia atque illo dicta fuga dolores, voluptatum repellat dolorum molestias. Nobis eligendi ducimus asperiores possimus at architecto laborum illo sunt sequi! Suscipit, molestias laudantium. Reiciendis harum ab deserunt tempore veniam molestiae nesciunt, sed impedit distinctio. Reiciendis numquam optio eaque quam rerum eveniet! Esse, debitis laboriosam perferendis saepe doloremque expedita laudantium, minima minus mollitia repellendus, ea voluptatem."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Azwan",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fuga tempora repudiandae maiores molestias ut consequuntur saepe blanditiis harum quaerat, deserunt facere similique sapiente alias ipsa. Nobis labore earum tempore, provident est atque hic nulla ullam magni quibusdam modi tenetur aliquam libero. Quam at animi exercitationem veritatis soluta neque quia possimus quae ab nesciunt in, eos dicta quod veniam laboriosam nihil aliquid minus nisi temporibus. Exercitationem totam omnis aperiam, incidunt minus ipsa officiis placeat ullam ut perferendis et architecto doloremque sint animi, ab sunt assumenda tempora? Cumque numquam minima debitis autem fugiat quas architecto, quod tenetur, amet vero illo accusamus!"
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

