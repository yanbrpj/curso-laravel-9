@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<h1>Listagem dos usuários</h1>
<hr>
<a href="{{ route('users.create') }}">Cadastrar</a>
<hr>
<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Procurar">
    <button type="submit">Procurar</button>
</form>
<hr>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }}-
            {{ $user->email }} | 
            <a href="{{ route('users.show', $user->id) }}">Ver</a> | 
            <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        </li>
    @endforeach
</ul>    
@endsection