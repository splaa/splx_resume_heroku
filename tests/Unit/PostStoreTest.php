<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class PostStoreTest extends TestCase
{
    use WithFaker,RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Todo: 37:50 Тестирование Laravel приложений
        $post = \App\Models\Post::factory()->create();

        self::assertNotEmpty($post);
    }
}
