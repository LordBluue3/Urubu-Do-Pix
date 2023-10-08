@extends('layout/admin-dashboard')
@push('head')
@vite(['resources/scss/dashboard/admin/list-user.scss'])
@vite(['resources/scss/dashboard/admin/list-posts.scss'])
@endpush
@section('content')
<div class="container_list">
    <div class="about_list">
        <div>
            <p>Title</p>
        </div>
        <div>
            <p>Data da postagem</p>
        </div>
        <div>
            <p>Deletar/Alterar</p>
        </div>

    </div>
    @foreach ($posts as $post)
        <div class="list">
            <div>
                <p>{{ $post->title }}</p>
            </div>
            <div>
                <p> {{ $post->date }}</p>
            </div>

            <div class="container_button">
                <form action="/dashboard/admin/edit/post/{{ $post->id }}" method="GET">
                    <button id="edit" type="submit">Editar</button>
                </form>
                <br>
                <form action="/dashboard/admin/post/delete/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection