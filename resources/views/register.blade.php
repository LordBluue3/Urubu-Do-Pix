@extends('layout/app')

@push('head')
    @vite(['resources/scss/register.scss'])
@endpush

@section('content')
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <input type="text"name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input id="phone" name="phone" type="tel" placeholder="(11) 9 9999-9999" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="password" name="repassword" placeholder="Repita a senha" required>
        <div class="container_button">
            <p>Se já tem uma conta <a href="{{ route('login') }}">Logar<a></p>
            <button type="submit">Cadastre-se</button>
        </div>
    </form>
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#phone').inputmask('(99) 9 9999-9999');
        });
    </script>
@endpush
