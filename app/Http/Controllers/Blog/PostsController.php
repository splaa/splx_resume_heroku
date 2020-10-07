<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    use WithFaker;
    /* ... */
    public function search(Request $request) {
        $search = $request->input('search', '');
        // обрезаем слишком длинный запрос
        $search = iconv_substr($search, 0, 64);
        // удаляем все, кроме букв и цифр
        $search = preg_replace('#[^0-9a-zA-ZА-Яа-яёЁ]#u', ' ', $search);
        // сжимаем двойные пробелы
        $search = preg_replace('#\s+#u', ' ', $search);
        if (empty($search)) {
            return view('posts.search');
        }
        $posts = Post::select('posts.*', 'users.name as author')
            ->join('users', 'posts.author_id', '=', 'users.id')
            ->where('posts.title', 'like', '%'.$search.'%') // поиск по заголовку поста
            ->orWhere('posts.body', 'like', '%'.$search.'%') // поиск по тексту поста
            ->orWhere('users.name', 'like', '%'.$search.'%') // поиск по автору поста
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4)
            ->appends(['search' => $request->input('search')]);

        return view('blog.posts.search', compact('posts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Post[]|Collection|Response
     */
    public function index(Request $request)
    {
       /* $this->validate($request,[
           'published' => 'nullable|boolean',
           'has_video' => 'nullable|boolean'
        ]);
        $query = Post::query();
        if ($request->published) {
            $query->published();
        }
        if ($request->has_video) {
            $query->hasVideo();
        }
        return response($query->get());*/

        $posts = Post::select('posts.*', 'users.name as author')
            ->join('users', 'posts.author_id', '=', 'users.id')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);
        return view('blog.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $post = new Post();
        $post->author_id = array_rand(User::pluck('id')->toArray());
        $post->title = $request->input('title');
        $post->slug = Str::slug($post->title);
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $image = $request->file('image');
        if ($image) {
            $path = Storage::putFile('public', $image);
            $post->image = Storage::url($path);
        }
        $post->save();
        return redirect()->route('blog.posts.index')->with('success', 'Новый пост успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
