@extends('layouts.app')

@section('title', 'Detalhes')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col">
            <h5>Detalhes do Usuário - {{ $user->name }}</h5>
            <a href="{{ route('users.index') }}">Inicio</a>

            <ul class="list-group">
                <li class="list-group-item">{{ $user->name }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection