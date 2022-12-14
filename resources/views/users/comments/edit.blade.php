@extends('layouts.app')

@section('title', 'Editar comentário')

@section('content')

    <h1>Editar o comentário </h1> 
    
    @include('includes.validations-form')

    <form action="{{ route('comments.update', $comment->id) }} " method="POST">
        @method('put')
        @include('users.comments._partials.form')
    </form>

    <h3>
        <a href="{{ route('comments.index', $comment->id) }}">Voltar</a>
    </h3>

@endsection