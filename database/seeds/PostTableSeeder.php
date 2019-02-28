<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {


          $generaTitolo = $faker->sentence(4);
          $randomCategory = Category::inRandomOrder()->first();

          $newPost = new Post;

          $newpost->category_id = $randomCategory->id;
          $newPost->title = $generaTitolo;
          $newPost->slug = Str::slug($generaTitolo);
          $newPost->author = $faker->name;
          $newPost->content = $faker->text;

          $newPost->save();
        }
    }
}
