@extends('layouts.app')

@section('title', 'Editar Post')

@section('content')
    <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 2rem; color: #1a1a1a;">Editar Post</h1>
    
    <form action="{{ route('posts.update', $post) }}" method="POST" style="max-width: 800px;">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea id="content" name="content" class="form-control" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div style="display: flex; gap: 1rem;">
            <button type="submit" class="btn btn-primary">Atualizar Post</button>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection

