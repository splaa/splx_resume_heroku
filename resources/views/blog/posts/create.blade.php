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
    <h1 class="mt-2 mb-3">Создать пост</h1>
    <form method="post" action="{{ route('blog.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Заголовок" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="excerpt" placeholder="Анонс поста" required></textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="Текст поста" rows="7" required></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection

