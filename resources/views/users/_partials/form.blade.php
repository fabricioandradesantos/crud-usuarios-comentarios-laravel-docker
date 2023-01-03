@csrf
    <input type="text" name="name" placeholder="Nome" maxlength="60" value="{{ $user->name ?? old('name') }}">
    <input type="email" name="email" placeholder="Email" maxlength="60" value="{{ $user->email ?? old('email')}}">
    <input type="password" name="password" placeholder="Senha" maxlength="15">
    <br><br><input type="file" name="image">
    <br><button type="submit"> 
        Enviar
    </button>

    <h3>
        <a href="{{ route('users.index') }}"> Voltar</a>
    </h3>