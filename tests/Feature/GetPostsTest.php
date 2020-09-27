<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetPostsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetPosts()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function testGetJson(): void
    {
        $post = Post::factory()->count(10)->create();
        $post_id = $post->pluck('id')->toArray();

        $response = $this->getJson('/posts');
        $response->assertJsonStructure()->assertStatus($response::HTTP_OK);


        $server_posts = json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $server_posts_id = collect($server_posts)->pluck('id');
        self::assertCount(count($server_posts_id), $post_id);

        foreach ($server_posts_id as $id) {
            self::assertContains($id, $post_id);
        }
    }

    public function testPublished(): void
    {
        $onePost = Post::factory()->create([
            'published_at' => null
        ]);
        $twoPost = Post::factory()->create([
            'published_at' => now()->subDay()
        ]);


        $response = $this->getJson(route('posts.index', ['published' => 1]));
        $response->assertJsonStructure()->assertStatus(200);


        $serverPost = (json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR));
        self::assertIsArray($serverPost);

        self::assertSame($this->count($serverPost), 1);
        /**
         * @var Post $publishedPost
         * @var Post $twoPost
         */
        $publishedPost = $serverPost[0];


        self::assertSame($publishedPost['id'], $twoPost->id);

    }
    public function testGetPostWithVideo(): void
    {
        $post = Post::factory()->create();

        $response = $this->getJson(route('posts.index', ['has_video' => 1]));
        $response->assertJsonStructure()->assertStatus(200);


        $serverPost = (json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR));
        self::assertIsArray($serverPost);

        self::assertSame($this->count($serverPost), 1);
        /**
         * @var Post $publishedPost
         * @var Post $twoPost
         */
        $publishedPost = $serverPost[0];


        self::assertSame($publishedPost['id'], $post->id);

    }
}
