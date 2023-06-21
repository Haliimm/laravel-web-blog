<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Halim Awaludien Khafifie',
            'username' => 'Halim',
            'email' => 'halimawaludienkhafifie@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Designer',
            'slug' => 'web-designer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Ke Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus quae deserunt enim aut, odit voluptas, dolores, autem animi hic deleniti modi recusandae distinctio neque beatae? Nihil neque aperiam id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus pariatur numquam quia deserunt neque harum reprehenderit laborum cum fugit, ea mollitia molestias eius voluptates odit est sapiente sed accusantium officiis ipsum voluptatum dolore. Blanditiis beatae dolores voluptatibus repellat sed eveniet quam dolorem asperiores necessitatibus molestias?</p><p>At rem dolorum aspernatur illum deleniti voluptas ratione minus labore veniam doloremque, non laudantium minima cumque harum voluptatum eum veritatis temporibus quia repudiandae! Recusandae consequatur sequi beatae porro. A recusandae, harum quibusdam neque commodi excepturi, rem, dolore vel ipsum asperiores sint! Impedit iure modi repellendus numquam est, doloremque inventore commodi recusandae aspernatur dolorem, amet voluptas!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At eos accusantium provident dolorem unde magni quisquam repellendus ipsum commodi, perspiciatis eius nihil, illum illo rem sed dignissimos, facere eligendi! Minima laborum praesentium veniam sed? Ipsa, saepe, ratione autem vel unde magnam quod quidem beatae distinctio facilis commodi praesentium aut veritatis.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto tenetur, labore nemo enim voluptatum iure maiores expedita est! Eligendi ipsum est optio explicabo eaque officiis consequuntur. Eum quam explicabo eos veniam numquam ipsum tempore vel quas architecto, unde, ullam corporis laborum magni excepturi, voluptatem quia? Hic unde quos aut ea eligendi dolorem dolor vero eos facere, impedit inventore nostrum saepe sapiente nihil, sit quas voluptate neque reprehenderit quidem soluta accusamus debitis necessitatibus veniam vitae. Doloribus vitae facilis ab natus in eaque impedit delectus facere odio quasi repudiandae doloremque, voluptatum ipsa asperiores neque, incidunt repellat perspiciatis illum expedita. Distinctio, in dolores.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus quae deserunt enim aut, odit voluptas, dolores, autem animi hic deleniti modi recusandae distinctio neque beatae? Nihil neque aperiam id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus pariatur numquam quia deserunt neque harum reprehenderit laborum cum fugit, ea mollitia molestias eius voluptates odit est sapiente sed accusantium officiis ipsum voluptatum dolore. Blanditiis beatae dolores voluptatibus repellat sed eveniet quam dolorem asperiores necessitatibus molestias?</p><p>At rem dolorum aspernatur illum deleniti voluptas ratione minus labore veniam doloremque, non laudantium minima cumque harum voluptatum eum veritatis temporibus quia repudiandae! Recusandae consequatur sequi beatae porro. A recusandae, harum quibusdam neque commodi excepturi, rem, dolore vel ipsum asperiores sint! Impedit iure modi repellendus numquam est, doloremque inventore commodi recusandae aspernatur dolorem, amet voluptas!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At eos accusantium provident dolorem unde magni quisquam repellendus ipsum commodi, perspiciatis eius nihil, illum illo rem sed dignissimos, facere eligendi! Minima laborum praesentium veniam sed? Ipsa, saepe, ratione autem vel unde magnam quod quidem beatae distinctio facilis commodi praesentium aut veritatis.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto tenetur, labore nemo enim voluptatum iure maiores expedita est! Eligendi ipsum est optio explicabo eaque officiis consequuntur. Eum quam explicabo eos veniam numquam ipsum tempore vel quas architecto, unde, ullam corporis laborum magni excepturi, voluptatem quia? Hic unde quos aut ea eligendi dolorem dolor vero eos facere, impedit inventore nostrum saepe sapiente nihil, sit quas voluptate neque reprehenderit quidem soluta accusamus debitis necessitatibus veniam vitae. Doloribus vitae facilis ab natus in eaque impedit delectus facere odio quasi repudiandae doloremque, voluptatum ipsa asperiores neque, incidunt repellat perspiciatis illum expedita. Distinctio, in dolores.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus quae deserunt enim aut, odit voluptas, dolores, autem animi hic deleniti modi recusandae distinctio neque beatae? Nihil neque aperiam id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus pariatur numquam quia deserunt neque harum reprehenderit laborum cum fugit, ea mollitia molestias eius voluptates odit est sapiente sed accusantium officiis ipsum voluptatum dolore. Blanditiis beatae dolores voluptatibus repellat sed eveniet quam dolorem asperiores necessitatibus molestias?</p><p>At rem dolorum aspernatur illum deleniti voluptas ratione minus labore veniam doloremque, non laudantium minima cumque harum voluptatum eum veritatis temporibus quia repudiandae! Recusandae consequatur sequi beatae porro. A recusandae, harum quibusdam neque commodi excepturi, rem, dolore vel ipsum asperiores sint! Impedit iure modi repellendus numquam est, doloremque inventore commodi recusandae aspernatur dolorem, amet voluptas!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At eos accusantium provident dolorem unde magni quisquam repellendus ipsum commodi, perspiciatis eius nihil, illum illo rem sed dignissimos, facere eligendi! Minima laborum praesentium veniam sed? Ipsa, saepe, ratione autem vel unde magnam quod quidem beatae distinctio facilis commodi praesentium aut veritatis.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto tenetur, labore nemo enim voluptatum iure maiores expedita est! Eligendi ipsum est optio explicabo eaque officiis consequuntur. Eum quam explicabo eos veniam numquam ipsum tempore vel quas architecto, unde, ullam corporis laborum magni excepturi, voluptatem quia? Hic unde quos aut ea eligendi dolorem dolor vero eos facere, impedit inventore nostrum saepe sapiente nihil, sit quas voluptate neque reprehenderit quidem soluta accusamus debitis necessitatibus veniam vitae. Doloribus vitae facilis ab natus in eaque impedit delectus facere odio quasi repudiandae doloremque, voluptatum ipsa asperiores neque, incidunt repellat perspiciatis illum expedita. Distinctio, in dolores.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus quae deserunt enim aut, odit voluptas, dolores, autem animi hic deleniti modi recusandae distinctio neque beatae? Nihil neque aperiam id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus pariatur numquam quia deserunt neque harum reprehenderit laborum cum fugit, ea mollitia molestias eius voluptates odit est sapiente sed accusantium officiis ipsum voluptatum dolore. Blanditiis beatae dolores voluptatibus repellat sed eveniet quam dolorem asperiores necessitatibus molestias?</p><p>At rem dolorum aspernatur illum deleniti voluptas ratione minus labore veniam doloremque, non laudantium minima cumque harum voluptatum eum veritatis temporibus quia repudiandae! Recusandae consequatur sequi beatae porro. A recusandae, harum quibusdam neque commodi excepturi, rem, dolore vel ipsum asperiores sint! Impedit iure modi repellendus numquam est, doloremque inventore commodi recusandae aspernatur dolorem, amet voluptas!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At eos accusantium provident dolorem unde magni quisquam repellendus ipsum commodi, perspiciatis eius nihil, illum illo rem sed dignissimos, facere eligendi! Minima laborum praesentium veniam sed? Ipsa, saepe, ratione autem vel unde magnam quod quidem beatae distinctio facilis commodi praesentium aut veritatis.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto tenetur, labore nemo enim voluptatum iure maiores expedita est! Eligendi ipsum est optio explicabo eaque officiis consequuntur. Eum quam explicabo eos veniam numquam ipsum tempore vel quas architecto, unde, ullam corporis laborum magni excepturi, voluptatem quia? Hic unde quos aut ea eligendi dolorem dolor vero eos facere, impedit inventore nostrum saepe sapiente nihil, sit quas voluptate neque reprehenderit quidem soluta accusamus debitis necessitatibus veniam vitae. Doloribus vitae facilis ab natus in eaque impedit delectus facere odio quasi repudiandae doloremque, voluptatum ipsa asperiores neque, incidunt repellat perspiciatis illum expedita. Distinctio, in dolores.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta necessitatibus quae deserunt enim aut, odit voluptas, dolores, autem animi hic deleniti modi recusandae distinctio neque beatae? Nihil neque aperiam id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus pariatur numquam quia deserunt neque harum reprehenderit laborum cum fugit, ea mollitia molestias eius voluptates odit est sapiente sed accusantium officiis ipsum voluptatum dolore. Blanditiis beatae dolores voluptatibus repellat sed eveniet quam dolorem asperiores necessitatibus molestias?</p><p>At rem dolorum aspernatur illum deleniti voluptas ratione minus labore veniam doloremque, non laudantium minima cumque harum voluptatum eum veritatis temporibus quia repudiandae! Recusandae consequatur sequi beatae porro. A recusandae, harum quibusdam neque commodi excepturi, rem, dolore vel ipsum asperiores sint! Impedit iure modi repellendus numquam est, doloremque inventore commodi recusandae aspernatur dolorem, amet voluptas!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At eos accusantium provident dolorem unde magni quisquam repellendus ipsum commodi, perspiciatis eius nihil, illum illo rem sed dignissimos, facere eligendi! Minima laborum praesentium veniam sed? Ipsa, saepe, ratione autem vel unde magnam quod quidem beatae distinctio facilis commodi praesentium aut veritatis.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto tenetur, labore nemo enim voluptatum iure maiores expedita est! Eligendi ipsum est optio explicabo eaque officiis consequuntur. Eum quam explicabo eos veniam numquam ipsum tempore vel quas architecto, unde, ullam corporis laborum magni excepturi, voluptatem quia? Hic unde quos aut ea eligendi dolorem dolor vero eos facere, impedit inventore nostrum saepe sapiente nihil, sit quas voluptate neque reprehenderit quidem soluta accusamus debitis necessitatibus veniam vitae. Doloribus vitae facilis ab natus in eaque impedit delectus facere odio quasi repudiandae doloremque, voluptatum ipsa asperiores neque, incidunt repellat perspiciatis illum expedita. Distinctio, in dolores.</p>'
        // ]);
    }
}