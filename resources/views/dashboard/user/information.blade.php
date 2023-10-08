@extends('layout/user-dashboard')

@push('head')
    @vite(['resources/scss/register.scss'])
@endpush

@section('content')
    <div class="container_information">

        <h1>Atualizar Informações</h1>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <input type="text"name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input id="phone" name="phone" type="tel" placeholder="(11) 9 9999-9999" required>
            <div class="container_button">
                <button>Atualizar</button>
            </div>
        </form>

    </div>
@endsection