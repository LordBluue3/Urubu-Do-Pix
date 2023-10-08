@extends('layout/app')

@push('head')
@vite(['resources/scss/login.scss'])
@endpush

@section('content')
<form action="{{route('login.store')}}" method="POST">
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Senha" required>
    <div class="container_button">
        <p>Se não tem uma conta <a href="{{route('register')}}">Cadastre-se<a></p>
        <button >Logar</button>
    </div>
</form>
@endsection