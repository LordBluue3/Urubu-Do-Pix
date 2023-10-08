@extends('layout/app')

@push('head')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
    <section class="container_home">
        <div class="container_image">
            <img src="https://cdn.discordapp.com/attachments/701489669673844887/1160249280603377806/noticiasconcursos.png?ex=6533f958&is=65218458&hm=1edd86893250d20b5da498522ea0cf878c60c0704a94867847684f33269e6398&"
                alt="Imagem de um Urubu ao lado da logo do Pix">
        </div>
        <div class="container_posts">
            <h1 class="title_news">Novidades</h1>
            @forEach($posts as $post)
            <div class="container_post">
                <div class="container_title">
                    <h1 class="title_post">{{$post->title}}</h1>
                </div>
                <p>{{$post->text}}</p>
                <p class="date">{{$post->date}}</p>
            </div>
            @endforeach
    </section>
@endsection
