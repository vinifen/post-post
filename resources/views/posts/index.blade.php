@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 2rem; color: #1a1a1a;">Posts</h1>
    
    @auth
        <div style="margin-bottom: 2rem;">
            <a href="{{ route('posts.create') }}" class="btn btn-primary" style="text-decoration: none; display: inline-block;">Criar Novo Post</a>
        </div>
    @else
        <div style="margin-bottom: 2rem; padding: 1rem; background-color: #f5f5f5; border-radius: 4px;">
            <p style="margin-bottom: 0.5rem;">Você precisa estar logado para criar posts.</p>
            <a href="{{ route('login') }}" class="btn btn-primary" style="text-decoration: none; display: inline-block;">Fazer Login</a>
        </div>
    @endauth
    
    @forelse($posts as $post)
        <div class="post-card">
            <h2 class="post-title">
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2>
            <div class="post-meta">
                Por <strong>{{ $post->user->name }}</strong> em {{ $post->created_at->format('d/m/Y H:i') }}
            </div>
            <div class="post-content">
                {{ Str::limit($post->content, 200) }}
            </div>
            @auth
                @if(auth()->user()->id === $post->user_id)
                    <div class="post-actions">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary" onclick="return confirm('Tem certeza que deseja deletar este post?')">Deletar</button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    @empty
        <div style="text-align: center; padding: 3rem; color: #6b7280;">
            <p style="font-size: 1.25rem; margin-bottom: 0.5rem;">Nenhum post ainda</p>
            <p>Seja o primeiro a criar um post!</p>
        </div>
    @endforelse
    
    <div class="pagination">
        {{ $posts->links() }}
    </div>
@endsection

