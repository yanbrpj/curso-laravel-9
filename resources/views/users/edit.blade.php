@extends('layouts.app')

@section('title', "Editar - $user->name")

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col">
                <h5>Editar Usuário - {{ $user->name }}</h5>
                <a href="{{ route('users.index') }}">Inicio</a>

                @include('includes.errors')
            
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @method('PUT')
                    @include('users._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection