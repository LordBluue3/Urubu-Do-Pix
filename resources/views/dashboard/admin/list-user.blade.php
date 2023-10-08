@extends('layout/admin-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
    @vite(['resources/scss/dashboard/admin/list-user.scss'])
@endpush

@section('content')
    <div class="container_list_user">
        <div class="container_income">
            <div class="container_card_results">
                <p class="money">R$ 1000</p>
    
                <div class="container_yield">
                    <div class="triangle"></div>
                    <p>Arrecadado</p>
                </div>
            </div>
            <div class="container_buttons">
                <button>Sacar</button>
            </div>
        </div>

        <div class="container_list">
            <div class="about_list">
                <div><p>Nome</p></div>
                <div><p>Dinheiro</p></div>
                <div class="container_button">
                    <button disabled>Deletar</button>
                </div>
            </div>
            <div class="list">
                <div><p>mikael</p></div>
                <div><p>R$ 1000</p></div>
                <div class="container_button">
                    <button>Deletar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
