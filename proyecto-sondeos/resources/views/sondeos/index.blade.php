<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($sondeos as $sondeo)
        <li>
            <img src="{{asset($sondeo->icono_sondeo)}}" alt="">
            <a href="/sondeo/{{$sondeo->id}}">{{$sondeo->titulo}}</a>
            <p>{{ $sondeo->descripcion}}</p>
            <p>{{ $sondeo->fecha_apertura }}</p>
            <p>{{ $sondeo->fecha_cierre }}</p>
        </li>
        @endforeach
    </ul>




    <form action="/logout" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cerrar sesion">
    
    </form>
    <a href="/create">crear sondeo</a>
</body>
</html>