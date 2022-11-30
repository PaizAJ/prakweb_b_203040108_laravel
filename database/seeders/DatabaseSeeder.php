<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Paiz Abdul Jabar',
            'username' => 'paizabduljabar',
            'email' => 'alafifinuraziz957@gmail.com',
            'password' => bcrypt('password')
        ]);

       // User::create([
       //    'name' => 'Rafliansyah',
       //     'email' => 'Rafliansyah@gmail.com',
       //     'password' => bcrypt('12345')
       //]);
        User::factory(3)->create();

        Category::Create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::Create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::Create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();
        
        //Post::create([
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
       //     'category_id' => 1,
       //     'user_id' => 1
       // ]);

       // Post::create([
        //    'title' => 'Judul Ke Dua',
        //    'slug' => 'judul-ke-dua',
        //    'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing /elit. Error libero consequatur cupiditate suscipit',
        //    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error libero consequatur cupiditate suscipit, adipisci dicta deleniti! Maiores, architecto sequi. Error, asperiores consequuntur hic est numquam atque nobis ipsum id placeat vero suscipit doloribus quos labore totam rerum dolorem accusamus aliquid! Sit fugiat, dolorum perspiciatis est repellat laboriosam ratione veritatis praesentium doloribus natus corrupti et pariatur itaque fuga rerum dolore magni error molestiae dicta consectetur nemo, eius blanditiis ullam. Deleniti eos expedita dolore exercitationem reprehenderit voluptate dicta provident possimus animi nam illum, amet, temporibus necessitatibus! Exercitationem suscipit unde quos vel inventore ipsa ab cupiditate voluptate officia recusandae id, eveniet fuga possimus?.',
        //    'category_id' => 1,
        //    'user_id' => 1
       // ]);

        //Post::create([
        //    'title' => 'Judul Ke Tiga',
        //    'slug' => 'judul-ke-tiga',
        //    'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error libero consequatur cupiditate suscipit',
        //    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error libero consequatur cupiditate suscipit, adipisci dicta deleniti! Maiores, architecto sequi. Error, asperiores consequuntur hic est numquam atque nobis ipsum id placeat vero suscipit doloribus quos labore totam rerum dolorem accusamus aliquid! Sit fugiat, dolorum perspiciatis est repellat laboriosam ratione veritatis praesentium doloribus natus corrupti et pariatur itaque fuga rerum dolore magni error molestiae dicta consectetur nemo, eius blanditiis ullam. Deleniti eos expedita dolore exercitationem reprehenderit voluptate dicta provident possimus animi nam illum, amet, temporibus necessitatibus! Exercitationem suscipit unde quos vel inventore ipsa ab cupiditate voluptate officia recusandae id, eveniet fuga possimus?.',
        //    'category_id' => 2,
        //    'user_id' => 1
        //]);

       // Post::create([
       //     'title' => 'Judul Ke Empat',
       //     'slug' => 'judul-ke-empat',
      //      'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error libero consequatur cupiditate suscipit',
      //      'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error libero consequatur cupiditate suscipit, adipisci dicta deleniti! Maiores, architecto sequi. Error, asperiores consequuntur hic est numquam atque nobis ipsum id placeat vero suscipit doloribus quos labore totam rerum dolorem accusamus aliquid! Sit fugiat, dolorum perspiciatis est repellat laboriosam ratione veritatis praesentium doloribus natus corrupti et pariatur itaque fuga rerum dolore magni error molestiae dicta consectetur nemo, eius blanditiis ullam. Deleniti eos expedita dolore exercitationem reprehenderit voluptate dicta provident possimus animi nam illum, amet, temporibus necessitatibus! Exercitationem suscipit unde quos vel inventore ipsa ab cupiditate voluptate officia recusandae id, eveniet fuga possimus?.',
       //     'category_id' => 2,
       //     'user_id' => 2
      //  ]);
    }
}
