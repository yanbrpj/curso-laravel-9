@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col">
            <h5>Listagem dos usuários</h5>
            <a href="{{ route('users.create') }}">Cadastrar</a>
            <hr>
            <form action="{{ route('users.index') }}" method="get">
                <label for="Teste"></label>
                <input type="text" name="search" placeholder="Procurar">
                <button type="submit" class="btn btn-success">Procurar</button>
            </form>
            <hr>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('users.show', $user->id) }}">Ver</a></td>
                            <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection