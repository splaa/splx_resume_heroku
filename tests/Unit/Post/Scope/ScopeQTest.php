<?php

namespace Tests\Unit\Post\Scope;



use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScopeQTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     * @var Post $post
     * @return void
     */
    public function testTitle(): void
    {
        $post = Post::factory()->create([
            'title' => 'my-blog'
        ]);
        $dbPost = Post::q('blog')->first();

        self::assertSame($dbPost->id, $post->id);
    }
    /**
     * A basic unit test example.
     * @var Post $post
     * @return void
     */
    public function testNotFoundTitle(): void
    {
        $post = Post::factory()->create([
            'title' => 'my-another-post',
            'slug' => 'my-another-post',
        ]);
        $dbPost = Post::q('blog')->first();

        self::assertNull($dbPost);
    }
    /**
     * A basic unit test example.
     * @var Post $post
     * @return void
     */
    public function testSimple(): void
    {
        $post = Post::factory()->create([
            'title' => 'Test Post',
            'slug' => 'my-blog'
        ]);
        $dbPost = Post::q('blog')->first();

        self::assertNotNull($dbPost);
        self::assertSame($dbPost->id, $post->id);
    }


}
