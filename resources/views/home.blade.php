@extends('layout/app')

@push('head')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
    <div class="container_image">
        <img src="https://cdn.discordapp.com/attachments/701489669673844887/1160249280603377806/noticiasconcursos.png?ex=6533f958&is=65218458&hm=1edd86893250d20b5da498522ea0cf878c60c0704a94867847684f33269e6398&"
            alt="Imagem de um Urubu ao lado da logo do Pix">
    </div>
    <div class="container_posts">
        <div class="container_title">
            <h1>Urubu do Pix</h1>
        </div>
        <p>rendendo muito mais que os invetimentos atuais do mercado!</p>
        <p class="date">07/10/2023</p>
    <div>
@endsection
