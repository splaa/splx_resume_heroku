@php
/**
 * @var Post $post
 */
use App\Models\Post;
@endphp
<div class="col-6 mb-4">
    <div class="card">
        <div class="card-header">{{ $post->title }}</div>
        <div class="card-body">{{ $post->excerpt }}</div>
    </div>
</div>
