@extends('layouts.app')

@section('title', 'Registrar')

@section('content')
    <div style="max-width: 400px; margin: 3rem auto;">
        <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 2rem; color: #1a1a1a; text-align: center;">Registrar</h1>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirmar Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 1rem;">Registrar</button>
        </form>
        
        <div style="text-align: center; color: #6b7280;">
            <p>Já tem uma conta? <a href="{{ route('login') }}" style="color: #1a1a1a;">Faça login</a></p>
        </div>
    </div>
@endsection

