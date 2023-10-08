@extends('layout/admin-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
    @vite(['resources/scss/login.scss'])
@endpush

@section('content')
    <h1>Postar Novidades</h1>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input name="title" type="text" placeholder="Title" required>
        <input name="description" type="text" placeholder="Descrição" required>
        <div class="container_button">
            <button>Postar</button>
        </div>
    </form>
@endsection
