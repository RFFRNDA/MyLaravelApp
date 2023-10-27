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
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
        //     'name' => 'Rafif Fernanda',
        //     'email' => 'rafiffernanda123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::create([
            'name' => 'Rafif Fernanda',
            'username' => 'rafiffernanda',
            'email' => 'rafiffernanda123@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, culpa!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur odio fugit ex ratione totam dolorum, maxime, ipsa nulla ea quae quibusdam nam maiores! Eos quasi esse amet velit totam! Ipsum odio tempora dolore enim, possimus adipisci vel asperiores quis nobis excepturi officia maxime tenetur, eveniet neque? Repellat illum consequuntur laborum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quae commodi iusto harum esse id beatae eius totam exercitationem voluptate repellendus nostrum tempora nemo rerum, ad fugiat? Quas sunt nemo, voluptatem laboriosam doloremque eveniet voluptas laborum obcaecati, quis, ducimus corrupti dolores. Quidem temporibus quae obcaecati! Ipsa nobis eos cumert!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, culpa!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur odio fugit ex ratione totam dolorum, maxime, ipsa nulla ea quae quibusdam nam maiores! Eos quasi esse amet velit totam! Ipsum odio tempora dolore enim, possimus adipisci vel asperiores quis nobis excepturi officia maxime tenetur, eveniet neque? Repellat illum consequuntur laborum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quae commodi iusto harum esse id beatae eius totam exercitationem voluptate repellendus nostrum tempora nemo rerum, ad fugiat? Quas sunt nemo, voluptatem laboriosam doloremque eveniet voluptas laborum obcaecati, quis, ducimus corrupti dolores. Quidem temporibus quae obcaecati! Ipsa nobis eos cumert!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, culpa!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur odio fugit ex ratione totam dolorum, maxime, ipsa nulla ea quae quibusdam nam maiores! Eos quasi esse amet velit totam! Ipsum odio tempora dolore enim, possimus adipisci vel asperiores quis nobis excepturi officia maxime tenetur, eveniet neque? Repellat illum consequuntur laborum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quae commodi iusto harum esse id beatae eius totam exercitationem voluptate repellendus nostrum tempora nemo rerum, ad fugiat? Quas sunt nemo, voluptatem laboriosam doloremque eveniet voluptas laborum obcaecati, quis, ducimus corrupti dolores. Quidem temporibus quae obcaecati! Ipsa nobis eos cumert!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, culpa!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur odio fugit ex ratione totam dolorum, maxime, ipsa nulla ea quae quibusdam nam maiores! Eos quasi esse amet velit totam! Ipsum odio tempora dolore enim, possimus adipisci vel asperiores quis nobis excepturi officia maxime tenetur, eveniet neque? Repellat illum consequuntur laborum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quae commodi iusto harum esse id beatae eius totam exercitationem voluptate repellendus nostrum tempora nemo rerum, ad fugiat? Quas sunt nemo, voluptatem laboriosam doloremque eveniet voluptas laborum obcaecati, quis, ducimus corrupti dolores. Quidem temporibus quae obcaecati! Ipsa nobis eos cumert!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
