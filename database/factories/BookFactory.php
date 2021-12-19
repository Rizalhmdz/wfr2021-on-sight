<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use Carbon\Carbon;

class BookFactory extends Factory
{
    /**
     * 
     *  
     * @var string
     * 
     protected $model = Book::class;
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'cover' => "The Last Professional.jpg",
            'author' => "Ed Davis",
            'category' => "literary",
            'price' => 150000,
            'description' => $this->faker->paragraph(mt_rand(2, 10)),
            'publisher' => "Artemesia Publishing, LLC",
            'publish_date' => Carbon::parse('25-01-2022'),
            'pages' => 250,
            'language' => "English"
        ];
    }
}
