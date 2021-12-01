<?php


namespace Database\Seeders;

use App\Models\Product;
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
        // factory(App\Article::class, 20)->create();
        // \App\Models\Article::factory(20)->create();
        Product::factory(20)->create();
        // \App\Models\User::factory(10)->create();
    }
}
