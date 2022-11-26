@extends('layouts.app')

@section('title', 'Visualizar usuário')

@section('content')

    <h1> Listagem do usuario: 
         {{ $user->name }}

    </h1> 

    <ul>
        <li> {{$user->name }}</li>
        <li> {{$user->email }}</li>
        <li> {{$user->created_at }}</li>

        <a href="{{ route('users.edit', ['id' => $user->id])}}">Editar</a>
        
        | <form action="{{ route('users.destroy', $user->id)}}" method="POST" >
            @csrf
            @method('delete')
            <button type="submit">Deletar</button>
        </form>

    </ul>

    <h3>
        <a href="{{ route('users.index') }}"> Voltar</a>
    </h3>
    
@endsection