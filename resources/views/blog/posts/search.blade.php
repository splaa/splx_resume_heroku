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
    <h1 class="mt-2 mb-3">Результаты поиска</h1>
    @if (isset($posts) && count($posts))
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-header"><h3>{{ $post->title }}</h3></div>
                        <div class="card-body">
                            <img src="{{ $post->image ?? asset('images/blog/default.jpg') }}" alt="" class="img-fluid">
                            <p class="mt-3 mb-0">{{ $post->excerpt }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <span class="float-left">
                                    Автор: {{ $post->author }}
                                    <br>
                                    Дата: {{ date_format($post->created_at, 'd.m.Y H:i') }}
                                </span>
                                <a href="{{route('blog.posts.show', $post)}}" class="btn btn-dark float-right">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    {{ $posts->links('vendor/pagination/bootstrap-4')}}
    @else
        <p>По вашему запросу ничего не найдено</p>
    @endif
@endsection

