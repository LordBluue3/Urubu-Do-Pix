@extends('layout/app')

@push('head')
    @vite(['resources/scss/login.scss'])
@endpush

@section('content')
    <h1>Entrar</h1>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Senha" required>
        <div class="container_button">
            <p>Se não tem uma conta <a href="{{ route('register') }}">Cadastre-se<a></p>
            <button>Logar</button>
        </div>
    </form>
@endsection
