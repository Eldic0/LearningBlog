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
            'name' => 'Michael Rivaldo',
            'username' => 'michaelrivaldo',
            'email' => 'michaelrivaldo@gmail.com',
            'password' => bcrypt('12345678')

        ]);

        Category::create([
            'name' => 'Code',
            'slug' => 'code',
        ]);

        Category::create([
            'name' => 'General',
            'slug' => 'general',
        ]);

        Category::create([
            'name' => 'Computer Analytic',
            'slug' => 'computer-analytic',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
        ]);

        Category::create([
            'name' => 'Calculus',
            'slug' => 'calculus',
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'music',
        ]);
        
        // User::create([
        //     'name' => 'Kevin Kosasih',
        //     'email' => 'kevinkosasih@gmail.com',
        //     'password' => bcrypt('54321')

        // ]);

        User::factory(3)->create();


        // Category::create([
        //     'name'=> 'Web Programming',
        //     'slug'=> 'web-programming'
        // ]);
        // Category::create([
        //     'name'=> 'Personal',
        //     'slug'=> 'personal'
        // ]);
        // Category::create([
        //     'name'=> 'Web Design',
        //     'slug'=> 'web-design'
        // ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate laborum et quisquam impedit aperiam eveniet pariatur perferendis voluptatem at? Voluptates laudantium adipisci earum dolor nobis nostrum veritatis mollitia corporis? Facere earum commodi culpa voluptatum mollitia odio, doloremque ea ex minima maiores blanditiis fuga dolores inventore beatae? Magnam rem id saepe architecto facilis illo, corporis reiciendis labore sit, corrupti assumenda aspernatur veniam consequuntur. Repellat eos, quas velit ab quod dolores repudiandae eveniet, corrupti fuga exercitationem tenetur omnis veniam sapiente vero blanditiis error consequatur dignissimos facilis aliquid vel amet assumenda. Voluptas, eveniet. Pariatur, non sit consequatur quia incidunt laboriosam officiis expedita deserunt laudantium voluptate placeat enim quidem ad accusamus harum provident vel dolore deleniti sed voluptas velit. Eligendi dolor ut aut molestiae pariatur. Eaque reiciendis officiis cumque ratione odio, facilis doloribus, molestias alias ducimus odit eveniet omnis, ea ut deleniti et. Asperiores quaerat dolore vitae in, ratione doloremque officiis delectus laborum placeat doloribus commodi nemo molestias suscipit et cumque! Soluta rerum quasi reprehenderit?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate laborum et quisquam impedit aperiam eveniet pariatur perferendis voluptatem at? Voluptates laudantium adipisci earum dolor nobis nostrum veritatis mollitia corporis? Facere earum commodi culpa voluptatum mollitia odio, doloremque ea ex minima maiores blanditiis fuga dolores inventore beatae? Magnam rem id saepe architecto facilis illo, corporis reiciendis labore sit, corrupti assumenda aspernatur veniam consequuntur. Repellat eos, quas velit ab quod dolores repudiandae eveniet, corrupti fuga exercitationem tenetur omnis veniam sapiente vero blanditiis error consequatur dignissimos facilis aliquid vel amet assumenda. Voluptas, eveniet. Pariatur, non sit consequatur quia incidunt laboriosam officiis expedita deserunt laudantium voluptate placeat enim quidem ad accusamus harum provident vel dolore deleniti sed voluptas velit. Eligendi dolor ut aut molestiae pariatur. Eaque reiciendis officiis cumque ratione odio, facilis doloribus, molestias alias ducimus odit eveniet omnis, ea ut deleniti et. Asperiores quaerat dolore vitae in, ratione doloremque officiis delectus laborum placeat doloribus commodi nemo molestias suscipit et cumque! Soluta rerum quasi reprehenderit?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate laborum et quisquam impedit aperiam eveniet pariatur perferendis voluptatem at? Voluptates laudantium adipisci earum dolor nobis nostrum veritatis mollitia corporis? Facere earum commodi culpa voluptatum mollitia odio, doloremque ea ex minima maiores blanditiis fuga dolores inventore beatae? Magnam rem id saepe architecto facilis illo, corporis reiciendis labore sit, corrupti assumenda aspernatur veniam consequuntur. Repellat eos, quas velit ab quod dolores repudiandae eveniet, corrupti fuga exercitationem tenetur omnis veniam sapiente vero blanditiis error consequatur dignissimos facilis aliquid vel amet assumenda. Voluptas, eveniet. Pariatur, non sit consequatur quia incidunt laboriosam officiis expedita deserunt laudantium voluptate placeat enim quidem ad accusamus harum provident vel dolore deleniti sed voluptas velit. Eligendi dolor ut aut molestiae pariatur. Eaque reiciendis officiis cumque ratione odio, facilis doloribus, molestias alias ducimus odit eveniet omnis, ea ut deleniti et. Asperiores quaerat dolore vitae in, ratione doloremque officiis delectus laborum placeat doloribus commodi nemo molestias suscipit et cumque! Soluta rerum quasi reprehenderit?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, assumenda laudantium quaerat repellendus voluptatem magni sequi, repellat voluptate error ducimus inventore iste, facere molestias quis nulla saepe voluptatum iure quos alias temporibus omnis aspernatur incidunt! Repellendus deserunt esse et dolor eligendi. Suscipit incidunt maiores maxime amet quam. Cupiditate laborum et quisquam impedit aperiam eveniet pariatur perferendis voluptatem at? Voluptates laudantium adipisci earum dolor nobis nostrum veritatis mollitia corporis? Facere earum commodi culpa voluptatum mollitia odio, doloremque ea ex minima maiores blanditiis fuga dolores inventore beatae? Magnam rem id saepe architecto facilis illo, corporis reiciendis labore sit, corrupti assumenda aspernatur veniam consequuntur. Repellat eos, quas velit ab quod dolores repudiandae eveniet, corrupti fuga exercitationem tenetur omnis veniam sapiente vero blanditiis error consequatur dignissimos facilis aliquid vel amet assumenda. Voluptas, eveniet. Pariatur, non sit consequatur quia incidunt laboriosam officiis expedita deserunt laudantium voluptate placeat enim quidem ad accusamus harum provident vel dolore deleniti sed voluptas velit. Eligendi dolor ut aut molestiae pariatur. Eaque reiciendis officiis cumque ratione odio, facilis doloribus, molestias alias ducimus odit eveniet omnis, ea ut deleniti et. Asperiores quaerat dolore vitae in, ratione doloremque officiis delectus laborum placeat doloribus commodi nemo molestias suscipit et cumque! Soluta rerum quasi reprehenderit?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
