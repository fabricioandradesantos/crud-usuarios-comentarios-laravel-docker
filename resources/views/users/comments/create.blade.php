@extends('layouts.app')

@section('title', "Criar novo comentário para o usuário ( {$user->name} )")

@section('content')

    <h1>Criar novo comentário para o usuário ( {{$user->name}} )</h1> 

    @include('includes.validations-form')

    <form action="{{ route('comments.store', $user->id) }}" method="POST">
        @include('users.comments._partials.form')
    </form>

@endsection