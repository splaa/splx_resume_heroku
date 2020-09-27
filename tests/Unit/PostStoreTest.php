<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Str;
use Tests\TestCase;


class PostStoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        /**
         * @var Post $post
         */
        $post = Post::factory()->create();
        $dbPost = Post::first();


        self::assertNotEmpty($post);
        self::assertNotNull($dbPost);
        self::assertSame($post->id, $dbPost->id);
    }

    public function testDatabase()
    {
        $post = User::create([
            'name' => 'splX',
            'email' => 'splaandrey@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        self::assertNotNull($post);
        $this->assertDatabaseHas('users', [
            'email' => 'splaandrey@gmail.com',
        ]);
    }
}
