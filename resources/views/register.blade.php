@extends('layout/app')

@push('head')
    @vite(['resources/scss/form.scss'])
@endpush

@section('content')
    <h1>Cadastre-se</h1>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <input type="text"name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input id="phone" name="phone" type="tel" placeholder="(11) 9 9999-9999" required>
        <input type="password" id="password" name="password" placeholder="Senha" required>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Repita a senha" required>
        <div class="container_button">
            <p>Se já tem uma conta <a href="{{ route('login') }}">Logar<a></p>
            <button type="button" onclick="validator()">Cadastre-se</button>
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

        function validator() {
            password = document.getElementById('password').value;
            confirmPassword = document.getElementById('confirmPassword').value;

            if (password.trim() != confirmPassword.trim()) {
                alert("As senhas estão diferentes");
            }else{
                document.querySelector('form').submit();
            }
        }
    </script>

    
@endpush
