@extends('layouts.app')

@section('title', 'Detalhes')

@section('content')
<h1>Detalhes do Usuário - {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>
@endsection