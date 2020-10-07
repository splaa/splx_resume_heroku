<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'body',
        'excerpt',
        'image',
        'video_url',
        'published_at',
    ];
    protected $dates = [
        'published_at'
    ];

    /**
     * только опубликованные посты
     * @param  Builder  $query
     * @return Builder
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->whereDate('published_at', '<=', today());
    }

    /**
     * Поиск постов по заголовку или slug
     * @param  Builder  $query
     * @param  string  $q
     * @return Builder
     */
    public function scopeQ(Builder $query,string $q): Builder
    {
        return $query->where(function (Builder $query) use ($q){
            $term = "%$q";
            return $query->orWhere('title', 'like', $term)
                ->orWhere('slug', 'like', $term);
        });
    }

    /**
     * @param  Builder  $query
     * @param  bool  $has
     * @return Builder
     */
    public function scopeHasVideo(Builder $query, bool $has = true): ?Builder
    {
        if ($has) {
            return $query->whereNotNull('video_url');
        }

        return $query->whereNull('video_url');
    }

    /**
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeHasNotVideo(Builder $query): Builder
    {

        return $query->hasVideo(false);
    }
}
