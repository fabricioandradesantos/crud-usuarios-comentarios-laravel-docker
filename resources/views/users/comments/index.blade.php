@extends('layouts.app')

@section('title', 'Comentários do usuário')

@section('content')

    <h1> 
        Comentários do usuário ( {{$user->name}} )
    </h1>

    <form action=" {{ route('comments.index', $user->id) }} " method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <h3>
        <a href="{{ route('comments.create', $user->id) }}"> Criar Novo Comentário</a> 
    </h3>

    <ul>
        @foreach($comments as $comment)
            <li>
                {{ $comment->body }} - 
                {{ $comment->visible ? 'Ativo' : 'Desativo'}}
              
                | <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id])}}">Editar</a>
                
                | <form action="{{ route('comments.destroy', $comment->id)}}" method="POST" >
                    @csrf
                    @method('delete')
                    <button type="submit">Deletar</button>
                </form>
            </li>
            
        @endforeach
    </ul>

    <div class="py-4">
        {{ $comments->appends([
            'search' => request()->get('search', '')
        ])->links() }}
    </div>

@endsection
