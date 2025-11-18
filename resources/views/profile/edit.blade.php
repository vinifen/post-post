@extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')
    <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 2rem; color: #1a1a1a;">Editar Perfil</h1>
    
    <form action="{{ route('profile.update') }}" method="POST" style="max-width: 500px;">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Nova Senha (deixe em branco para não alterar)</label>
            <input type="password" id="password" name="password" class="form-control">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password_confirmation">Confirmar Nova Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>
        
        <div style="display: flex; gap: 1rem;">
            <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection

