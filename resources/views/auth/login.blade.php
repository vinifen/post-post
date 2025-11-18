@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div style="max-width: 400px; margin: 3rem auto;">
        <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 2rem; color: #1a1a1a; text-align: center;">Login</h1>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
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
            
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem;">
                <input type="checkbox" id="remember" name="remember" value="1">
                <label for="remember" style="margin: 0; font-weight: normal;">Lembrar-me</label>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 1rem;">Entrar</button>
        </form>
        
        <div style="text-align: center; color: #6b7280;">
            <p>Não tem uma conta? <a href="{{ route('register') }}" style="color: #1a1a1a;">Registre-se</a></p>
        </div>
    </div>
@endsection

