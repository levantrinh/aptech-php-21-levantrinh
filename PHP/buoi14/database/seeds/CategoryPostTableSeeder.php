<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //pluck(lấy dữ liệu trong cột 'id' của table categories và convert thành plain array
        $ids_categories = Category::get()->pluck('id')->toArray();
        // dd($arrayIdOfCategories);

        //pluck(lấy dữ liệu trong cột 'id' của table posts và convert thành plain array
        $ids_posts = Post::get()->pluck('id')->toArray();
        // dd($array_categories[array_rand($array_categories)]);
        
        
        for ($i = 0; $i < 4; $i++) {
            $random_category_id = $ids_categories[array_rand($ids_categories)];
            $random_post_id = $ids_posts[array_rand($ids_posts)];

            $category_post_exists = DB::table('category_post')
                ->where('category_id', $random_category_id)
                ->where('post_id', $random_post_id)
                ->exists();
            // dd($category_post_exists);
            if ($category_post_exists == false) {
                // dd('aa');
                DB::table('category_post')->insert(
                    [
                        'category_id' => $random_category_id,
                        'post_id' => $random_post_id
                    ]
                );
            }
        }
    }
}