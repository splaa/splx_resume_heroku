<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
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
    public function definition():array
    {
        $set_now_time = now();
        $userIds = $this->faker->randomElement(User::pluck('id'));
        return [
            'title' => $this->faker->unique()->name,
            'author_id' => $userIds ?? null,
            'slug' => $this->faker->unique()->slug,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(1200, 400),
            'thumb' => $this->faker->imageUrl(600, 200),
            'video_url' => 'https://www.youtube.com/watch?v=Joyz5S0skr4',
            'published_at' => $set_now_time,
        ];
    }
}
