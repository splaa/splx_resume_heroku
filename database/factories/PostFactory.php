<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $set_now_time = now();

        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->unique()->slug,
            'body' => $this->faker->text,
            'video_url' => 'https://www.youtube.com/watch?v=Joyz5S0skr4',
            'published_at' => $set_now_time,
        ];
    }
}
