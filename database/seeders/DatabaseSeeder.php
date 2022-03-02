<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    
    
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
			
        $this->call(RolesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
