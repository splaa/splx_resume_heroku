<?php

namespace Tests\Unit\Post\Scope;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ScopePublishedTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPublished(): void
    {
        /**
         * @var Post $post
         */
        $post = Post::factory()->create([
            'published_at' => now()->subDay(),
        ]);
        $dbPost = Post::published()->first();



        self::assertNotNull($dbPost);
        self::assertSame($dbPost->id, $post->id);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNotPublished(): void
    {
        Post::factory()->create([
            'published_at' => null,
        ]);
        $dbPost = Post::published()->first();
        self::assertNull($dbPost);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNotPublishedNow(): void
    {
        /**
         * @var Post $post
         */
        $post = Post::factory()->create([
            'published_at' => now()->addDays(3),
        ]);
        $dbPost = Post::published()->first();
        self::assertNull($dbPost);

    }

}
