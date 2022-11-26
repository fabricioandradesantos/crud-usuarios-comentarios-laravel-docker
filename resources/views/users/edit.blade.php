@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')

    <h1>Editar o usuario </h1> 

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }} " method="POST">
        @method('put')
        @include('users._partials.form')
    </form>

    <h3>
        <a href="{{ route('users.index') }}">Voltar</a>
    </h3>

@endsection