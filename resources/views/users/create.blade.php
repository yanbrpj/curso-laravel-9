@extends('layouts.app')

@section('title', 'Criação')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col">
                <h5>Novo Usuário</h5>
                <a href="{{ route('users.index') }}">Inicio</a>
                @include('includes.errors')

                <form action="{{ route('users.store') }}" method="post">
                    @include('users._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection