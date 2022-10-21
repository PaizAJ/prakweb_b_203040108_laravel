<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home" 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Paiz Abdul Jabar",
        "email" => "alafifinuraziz957@gmail.com",
        "image" => "profile.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Paiz Abdul Jabar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nulla consequuntur quasi fugiat cupiditate sequi ea fugit, nisi officiis vitae aspernatur officia quo rem, quia atque illo dicta fuga dolores, voluptatum repellat dolorum molestias. Nobis eligendi ducimus asperiores possimus at architecto laborum illo sunt sequi! Suscipit, molestias laudantium. Reiciendis harum ab deserunt tempore veniam molestiae nesciunt, sed impedit distinctio. Reiciendis numquam optio eaque quam rerum eveniet! Esse, debitis laboriosam perferendis saepe doloremque expedita laudantium, minima minus mollitia repellendus, ea voluptatem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Azwan",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fuga tempora repudiandae maiores molestias ut consequuntur saepe blanditiis harum quaerat, deserunt facere similique sapiente alias ipsa. Nobis labore earum tempore, provident est atque hic nulla ullam magni quibusdam modi tenetur aliquam libero. Quam at animi exercitationem veritatis soluta neque quia possimus quae ab nesciunt in, eos dicta quod veniam laboriosam nihil aliquid minus nisi temporibus. Exercitationem totam omnis aperiam, incidunt minus ipsa officiis placeat ullam ut perferendis et architecto doloremque sint animi, ab sunt assumenda tempora? Cumque numquam minima debitis autem fugiat quas architecto, quod tenetur, amet vero illo accusamus!"
        ],
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Paiz Abdul Jabar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nulla consequuntur quasi fugiat cupiditate sequi ea fugit, nisi officiis vitae aspernatur officia quo rem, quia atque illo dicta fuga dolores, voluptatum repellat dolorum molestias. Nobis eligendi ducimus asperiores possimus at architecto laborum illo sunt sequi! Suscipit, molestias laudantium. Reiciendis harum ab deserunt tempore veniam molestiae nesciunt, sed impedit distinctio. Reiciendis numquam optio eaque quam rerum eveniet! Esse, debitis laboriosam perferendis saepe doloremque expedita laudantium, minima minus mollitia repellendus, ea voluptatem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Azwan",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus fuga tempora repudiandae maiores molestias ut consequuntur saepe blanditiis harum quaerat, deserunt facere similique sapiente alias ipsa. Nobis labore earum tempore, provident est atque hic nulla ullam magni quibusdam modi tenetur aliquam libero. Quam at animi exercitationem veritatis soluta neque quia possimus quae ab nesciunt in, eos dicta quod veniam laboriosam nihil aliquid minus nisi temporibus. Exercitationem totam omnis aperiam, incidunt minus ipsa officiis placeat ullam ut perferendis et architecto doloremque sint animi, ab sunt assumenda tempora? Cumque numquam minima debitis autem fugiat quas architecto, quod tenetur, amet vero illo accusamus!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});