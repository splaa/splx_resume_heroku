@php
    /**
     * @var Post[]|Collection|Response $posts
     * @var Post $post
     */
    use App\Models\Post;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Http\Response;
@endphp
@extends('blog.layouts.blog')

@section('content')
    <h1>Все посты блога</h1>
    <div class="row">
        @foreach($posts as $post)
          @include('blog.parts.posts.__cart', ['post' => $post])
        @endforeach
    </div>
    {{ $posts->links('vendor/pagination/bootstrap-4')}}
@endsection

