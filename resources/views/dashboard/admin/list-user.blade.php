@extends('layout/admin-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
    @vite(['resources/scss/dashboard/admin/list-user.scss'])
@endpush

@section('content')
    <div class="container_list_user">
        <div class="container_income">
            <div class="container_card_results">
                <p class="money">R$ {{ $admin->money }}</p>

                <div class="container_yield">
                    <div class="triangle"></div>
                    <p>Arrecadado</p>
                </div>
            </div>
            <div class="container_buttons">
                <form action="{{ route('dashboard.admin.draw.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit">Sacar</button>
                </form>
            </div>
        </div>

        <div class="container_list">
            <div class="about_list">
                <div>
                    <p>Nome</p>
                </div>
                <div>
                    <p>Dinheiro</p>
                </div>
                <div class="container_button">
                    <button disabled>Deletar</button>
                </div>
            </div>
            @foreach ($users as $user)
                <div class="list">
                    <div>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div>
                        <p>R$ {{ $user->money }}</p>
                    </div>
                    <div class="container_button">
                        <form action="/dashboard/admin/delete/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
