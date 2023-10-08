@extends('layout/admin-dashboard')

@push('head')
    @vite(['resources/scss/dashboard/user/income.scss'])
    @vite(['resources/scss/form.scss'])
    @vite(['resources/scss/dashboard/admin/post-new.scss'])
@endpush

@section('content')
    <h1>Postar Novidades</h1>
    <form action="{{ route('admin.new.post') }}" method="POST">
        @csrf
        <input name="title" type="text" placeholder="Title" required>
        <textarea name="description" placeholder="Descrição" required ></textarea>
        <div class="container_button">
          <p>Veja todos os <a href="{{ route('admin.new.post.show') }}">Posts<a></p>
            <button>Postar</button>
        </div>
    </form>
@endsection
