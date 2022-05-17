@extends('layouts.app')

@section('title', "Editar - $user->name")

@section('content')
    <h1>Editar Usuário - {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome do Usuário" value=" {{ $user->name }} ">
        <input type="email" name="email" placeholder="Email do Usuário" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha do Usuário">

        <button type="submit">
            Salvar
        </button>
    </form>
@endsection