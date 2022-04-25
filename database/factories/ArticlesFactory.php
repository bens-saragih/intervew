<?php

namespace Database\Factories;
use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Http\Controllers\

class ArticlesFactory extends Factory
{
    
    protected $model = Articles::class;

    public function definition()
    {
        return [
        
            'judul' => $this->faker->word(4,true),
            'isi'   => $this->faker->paragraphs(2,true),
            'slug'  => $this->faker->slug,

           

        ];
    }
}
