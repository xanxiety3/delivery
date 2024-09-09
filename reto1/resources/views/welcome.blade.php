<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        @php
            $user = auth()->user();
        @endphp

        @if($user->roles->contains('name', 'admin'))
            <h1>Esta es la vista para admins</h1>
        @endif

        @if($user->roles->contains('name', 'invitado'))
            <h1>Esta es la vista para invitados</h1>
        @endif

    @else
        <h1>No estás autenticado</h1>
    @endauth

    <form action="/logout" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cerrar sesión">
    </form>
    
</body>
</html>
