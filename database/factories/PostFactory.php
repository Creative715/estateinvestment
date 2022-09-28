<?php

namespace Database\Factories;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;

    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        $created =  $this->faker->dateTimeBetween('-21 days', '-2 days');
        return [
            'title' => $this->faker->text(30),
            'category_id' => $this->faker->numberBetween( 1,  6),
            'city_id' => $this->faker->numberBetween( 1,  150),
            'seo_title' => $this->faker->text(80),
            'intro' => $this->faker->paragraph(20, true),
            'content' => $this->faker->paragraph(100, true),
            'description' => $this->faker->paragraph(10, true),
            'seo_description' => $this->faker->text(25),
            'slug' => $slug,
            'created_at' => $created,
            'updated_at' => $created,
            'published' => 1,
            'price' => $this->faker->randomElement([1000, 2000, 3000, 5000, 10000]),
        ];
    }
}
