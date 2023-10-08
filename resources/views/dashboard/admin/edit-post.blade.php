@extends('layout/admin-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
    @vite(['resources/scss/form.scss'])
    @vite(['resources/scss/dashboard/admin/post-new.scss'])
@endpush

@section('content')
    <h1>Editar Post</h1>
    <form action="{{ route('admin.edit.post.update', ['id' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input value="{{$post->title}}" name="title" type="text" placeholder="Title" required>
        <textarea name="description" placeholder="Descrição" required >{{$post->text}}</textarea>
        <div class="container_button">
          <p>Veja todos os <a href="{{ route('admin.new.post.show') }}">Posts<a></p>
            <button>Editar</button>
        </div>
    </form>
@endsection
