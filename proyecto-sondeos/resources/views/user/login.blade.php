{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="/login" method="POST">

                @csrf
                <input type="text" placeholder="usuario" id="usuario" name="usuario">
                <input type="password" placeholder="contraseña" id="password" name="password">
                <input  type="submit" value="Iniciar sesion">
                <h5>¿No tienes una cuenta? <a href="/register">Registrate aquí</a></h5>
            
            </form>
            @if($errors->any())
            @foreach ($errors->all() as $error )
            <p>{{ $error }}</p>
                
            @endforeach
            @endif
    
</body>
</html>  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="div-padre">
        <div class="fondo-formulario">
            <img class="logo" src="/img/LOGOOO.png" alt="">
            <h6>¡Bienvenido de nuevo!</h6>
            <p>Tu participación nos importa</p>
            <form action="/login" method="POST">
                @csrf
                <input type="text" placeholder="   Usuario" id="usuario" name="usuario">
                <input type="password" placeholder="   Contraseña" id="password" name="password">
                <input  id="boton" type="submit" value="Iniciar sesion">
                <h5>¿No tienes una cuenta? <a href="/register">Registrate aquí</a></h5>
            </form>
                    @if($errors->any())
                    @foreach ($errors->all() as $error )
                    <p>{{ $error }}</p>
                        
                    @endforeach
                    @endif
        </div>
    </div> 
</body>
</html>