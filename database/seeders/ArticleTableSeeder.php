<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Articles;

class ArticleTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Articles::factory(10)->create();
    }
}


 ?>