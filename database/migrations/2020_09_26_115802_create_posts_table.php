<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('excerpt', 200);
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
}
