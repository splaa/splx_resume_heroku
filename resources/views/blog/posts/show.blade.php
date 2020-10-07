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
    <div class="row">
        <div class="col-12">
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="card-body">
                    <img src="{{ $post->image ?? asset('images/blog/default.jpg') }}" alt="" class="img-fluid">
                    <p class="mt-3 mb-0">{{ $post->body }}</p>
                </div>
                <div class="card-footer">
                    <div class="clearfix">
                        <span class="float-left">
                            Автор: {{ $post->author }}
                            <br>
                            Дата: {{ date_format($post->created_at, 'd.m.Y H:i') }}
                        </span>
                        <a href="{{ route('blog.posts.edit', $post) }}" class="btn btn-dark float-right">Редактировать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

