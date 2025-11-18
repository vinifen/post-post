@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="post-card">
        <h1 class="post-title">{{ $post->title }}</h1>
        <div class="post-meta">
            Por <strong>{{ $post->user->name }}</strong> em {{ $post->created_at->format('d/m/Y H:i') }}
        </div>
        <div class="post-content" style="white-space: pre-wrap;">{{ $post->content }}</div>
        
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
    
    <div style="margin-top: 2rem;">
        <a href="{{ route('home') }}" class="btn btn-secondary">Voltar para Posts</a>
    </div>
@endsection

