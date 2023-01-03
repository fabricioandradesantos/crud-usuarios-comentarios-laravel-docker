@extends('layouts.app')

@section('title', 'Criar usuário')

@section('content')

    <h1>Criar usuario </h1> 

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @include('users._partials.form')
    </form>

    <h3>
        <a href="{{ route('users.index') }}">Voltar</a>
    </h3>

@endsection