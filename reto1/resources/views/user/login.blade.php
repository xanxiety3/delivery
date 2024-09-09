<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="espacio">
        <div class="circulo">
            <img src="../img/logoo.png">
        </div>
        <div class="fondo-formulario">
            <form action="/login" method="POST">
                <div class="entradas">
                    <h5>Incia sesión y no te pierdas las novedades</h5>
                        @csrf
                        <input type="text" placeholder="email" id="email" name="email">
                        <input type="password" placeholder="password" id="password" name="password">
                        <input id="boton-login" type="submit" value="log in">
                        <h5>¿No tienes una cuenta? <a href="/register">Registrate aquí</a></h5>
                    
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
 
</body>
</html>