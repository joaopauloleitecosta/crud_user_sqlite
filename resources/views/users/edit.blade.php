<!DOCTYPE html>
<html>
<head>
    <title>Edição de Usuário</title>
</head>
<body>
    <h1>Edição de Usuário</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>