<?php
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return 
     * 
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Post::insert([
                'title' =>$faker->realText(100),
                'description' =>$faker->realText(200),
                'content' =>$faker->randomHtml()
            ]);
        }
    }
}
