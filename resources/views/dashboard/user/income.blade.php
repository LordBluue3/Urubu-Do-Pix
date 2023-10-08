@extends('layout/user-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
@endpush

@section('content')
    <div class="container_income">
        <div class="container_card_results">
            <p class="money">R$ 1000</p>

            <div class="container_yield">
                <div class="triangle"></div>
                <p>900% do CDI</p>
            </div>
        </div>
        <div class="container_buttons">
            <button>Depositar</button>
            <button id="withdraw">Sacar</button>
        </div>
    </div>
@endsection
