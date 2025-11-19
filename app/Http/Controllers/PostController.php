<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $this->authorize('create', Post::class);
        
        $post = Auth::user()->posts()->create($request->validated());

        return redirect()->route('home')->with('success', 'Post criado com sucesso!');
    }

    public function show(Post $post)
    {
        $post->load('user');
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $this->authorize('update', $post);
        
        $post->update($request->validated());

        return redirect()->route('home')->with('success', 'Post atualizado com sucesso!');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        
        $post->delete();

        return redirect()->route('home')->with('success', 'Post deletado com sucesso!');
    }
}
