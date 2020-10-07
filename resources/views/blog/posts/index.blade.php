@php
    /**
     * @var Post[] $posts
     * @var Post $post
     */
    use App\Models\Post;
@endphp
@extends('blog.layouts.blog')

@section('content')
    <h1>Все посты блога</h1>
    <div class="row">
        @foreach($posts as $post)
           @include('blog.parts.posts.__cart', compact('post'))
        @endforeach
    </div>
@endsection

