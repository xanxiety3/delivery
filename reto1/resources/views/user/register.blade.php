<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="espacio">
        <div class="circulo">
            <img src="../img/logoo.png">
        </div>
        <div class="fondo-formulario">
            <h5 id="unete">Unete a nosotros</h5>
                <div class="entradas2">
                        <form action="/register" method="POST">
                            @csrf
                            <input type="text" id="name" name="name" placeholder="name">
                            <input type="email" id="email" name="email" placeholder="email">
                            <input type="password" id="password" name="password" placeholder="password">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password">
                            <input id="boton-registro" type="submit" value="create">     
                        </form>
                        @if($errors->any())
                                        @foreach ($errors->all() as $error )
                                        <p>{{ $error }}</p>
                                            
                                        @endforeach
                                        @endif
                </div>
        </div>
    </div>
    
</body>
</html>