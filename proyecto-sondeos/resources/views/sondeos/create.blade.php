<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Mostrar mensajes de éxito -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mostrar mensajes de error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Crear Sondeo</h1>
    <form action="/create" method="POST" enctype="multipart/form-data">
        @csrf
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required>
        
            <label for="descripcion"> Descripción</label>
            <textarea name="descripcion" id="descripcion"></textarea>
    
            <label for="fecha_apertura">Fecha de Apertura</label>
            <input type="date" name="fecha_apertura" id="fecha_apertura" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
    
            <label for="fecha_cierre">Fecha de Cierre</label>
            <input type="date" name="fecha_cierre" id="fecha_cierre" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
        
            <label for="icono_sondeo">Icono del Sondeo</label>
            <input type="file" name="icono_sondeo" id="icono_sondeo" >
    
            <label for="filtro_perfil">Filtro de Perfil</label>
            <input type="text" name="filtro_perfil" id="filtro_perfil">
        
        <button type="submit" >Crear Sondeo</button>
    </form>

    

</body>
</html>