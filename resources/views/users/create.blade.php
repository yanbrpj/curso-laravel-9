@extends('layouts.app')

@section('title', 'Criação')

@section('content')
    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Usuário" value=" {{ old('name') }} ">
        <input type="email" name="email" placeholder="Email do Usuário" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha do Usuário">

        <button type="submit">
            Cadastrar
        </button>
    </form>
@endsection