<?php

namespace Tests\Unit\Post\Scope;


use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScopeHasVideoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testHasVideo(): void
    {
        /**
         * @var Post $post
         */
        $post = Post::factory()->create();
        $dbPost = Post::hasVideo()->first();

        self::assertNotNull($dbPost);
        self::assertSame($dbPost->id, $post->id);
        self::assertTrue(true);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testHasNotVideo(): void
    {
        /**
         * @var Post $post
         */
        $post = Post::factory()->create();
        $dbPost = Post::hasNotVideo()->first();

        self::assertNull($dbPost);

    }

}
