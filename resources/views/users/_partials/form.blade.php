@csrf
<input type="text" name="name" placeholder="Nome do Usuário" value=" {{ $user->name ?? old('name') }} ">
<input type="email" name="email" placeholder="Email do Usuário" value=" {{ $user->email ?? old('email') }} ">
<input type="password" name="password" placeholder="Senha do Usuário">

<button type="submit" class="btn btn-success">Enviar</button>

