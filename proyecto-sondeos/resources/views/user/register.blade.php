<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link  rel="shortcut icon" href="./img/LOGO-SOLO.png">
</head>
<body>
    <div class="texto">
        <h1>REGISTRATE</h1>
        <h5>Regístrate hoy y participa activamente en las decisiones que impactan</h5>
        <h5>tu comunidad. Juntos, construimos un futuro mejor</h5>
    </div>
    <form action="/register" method="POST">
    <div class="padre">
        <img class="logo" src="/img/LOGOOO.png" alt="logo">
        <div class="primera-fila">
          
            <div class="hijo">
                @csrf
                 <!-- {{-- NECESITAMOS UN DIV PADRE  --}}
                 {{--  DENTRO DE EL VAN DOS MAS, Y ESTE ES EL PRIMERO   --}} -->
                
                <label for="tipo_documento">
                    Tipo de documento*
                </label>
                <select name="tipo_documento_id" id="tipo_documento_id" required>
                    <option>Seleccione un tipo de documento</option>
                    @foreach($tiposDocumentos as $tipoDocumento)
                        <option value="{{ $tipoDocumento->id }}">{{ $tipoDocumento->nom_tipo }}</option>
                    @endforeach
                </select>
                <label for="num_documento">
                    Numero de documento*
                </label>
                <input type="text" name="num_documento" id="num_documento" required>
            
                <label for="nombres_completos">
                    Nombres completos*
                </label>
                <input type="text" name="nom_completo" id="nom_completo" required>
            
                <label for="apelldios">
                    Apellidos*
                </label>
                <input type="text" name="apellidos" id="apellidos" required>
            
                <label for="sexo">
                    Sexo*
                </label>
                <select name="sexo_id" id="sexo_id" required>
                    <option>Seleccione el sexo que lo define</option>
                    @foreach($sexos as $sexo)
                    <option value="{{ $sexo->id }}">{{ $sexo->nombre }}</option>
                    @endforeach
                </select>
            </div>    <!-- {{--  Aca termina el primer div   --}} -->
            <div class="hijo">
                <!-- {{--  Aca comienza el segun de la primera fila   --}} -->
    
                <label for="telefono_celular">
                    Telefono Celular*
                </label>
                <input type="text" name="telefono_celular" name="telefono_celular" required>
            
            
                <label for="telefono_fijo">
                    Telefono Fijo*
                </label>
                <input type="text" name="telefono_fijo" id="telefono_fijo">
            
            
                <label for="municipio">
                    Municipio*
                </label>
                 <input type="text" name="municipio" id="municipio">
            
                <label for="direccion">
                    Dirección
                </label>
                <input type="text" name="direccion" id="direccion">
            
            
                <label for="barrio">
                    Barrio-vereda*
                </label>
                <input type="text" name="barrio" id="barrio">
                 <!-- {{--  ACA TERMINA EL SEGUNDO DIV DE LA PRIMERA FILA   --}} -->
            </div>
        </div>
        <br>
        <div class="segunda-fila">  <!-- {--  ACA COMIENZA EL SEGUNDO DIV PADRE QUE ES EL DE LA FILA 2   --}} -->
            <div class="hijo">

                <!-- {{--  DENTRO VA EL 3 DIV HIJO   --}} -->
                <label for="fecha_nacimiento">
                    Fecha de nacimiento*
                </label>
                <input type="text" name="fecha_nacimiento" name="fecha_nacimiento" placeholder="  YYYY-MM-DD">

                <label for="etnia">
                    Etnia*
                </label>
                <select name="etnia_id" id="etnia_id">
                <option>Seleccione su etnia</option>
                @foreach ($etnias as $etnia)
                
                <option value="{{ $etnia->id }}">{{ $etnia->nombre }}</option>
                @endforeach
                </select>

                <label for="tipo_discapacidad">
                    Condicion de discapacidad*
                </label>
                <select name="tipo_discapacidad_id" id="tipo_discapacidad_id" required>
                    <option>Seleccione una opción</option>
                    @foreach ($discapacidades as $discapacidad)
                    <option value="{{ $discapacidad->id }}">{{ $discapacidad->nom_tipo_discapacidad }}</option>    
                    @endforeach
                </select>

                <label for="estrato">
                    Estrato de residencia*
                </label>
                <select name="estrato_socioeconomico_id" id="estrato_socioeconomico_id" required>
                    <option value="">Seleccione su estrato</option>
                    <option value="1">Estrato 1</option>
                    <option value="2">Estrato 2</option>
                    <option value="3">Estrato 3</option>
                    <!-- Más opciones -->
                </select>
                
                <label for="nivel_educativo">
                    Último nivel educativo alcanzado*
                </label>
                <select name="nivel_educativo_id" id="nivel_educativo_id" required>
                    <option value="">Seleccione una opcion</option>
                    @foreach ($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->id }}">{{ $nivel->nivel_educativo }}</option>
                    @endforeach
                </select>
            <!-- {{--  ACA TERMINA LA PRIMERA PARTE DE EL TERCER DIV HIJO DE EL DIV PADRE 2   --}} -->
            </div>
            <div class="hijo4">
                <label for="acceso_tecnologicos">
                    ¿Cuenta con acceso a dispositivos tecnólogicos?*
                </label>

                <div class="radioButons">
                    @foreach($accesosTecnologicos as $acceso)
                    <label  class="acceso_tec">
                        <div class="opc">

                        <input type="radio" name="acceso_tecnologia_id" id="acceso_tecnologia_id" value="{{ $acceso->acceso_tecnologia }}" required>
                        {{ $acceso->acceso_tecnologia ? 'Si' : 'No' }}
                        </div>
                    </label><br>
                    @endforeach
                </div>
                
                <label for="medio_tecnologico" id="texto-cual">
                    ¿Cual?*
                </label class="acceso_tec">
                <select name="medio_tecnologico" id="medio_tecnologico" required>
                    <option value="">Elija una opcion</option>
                    @foreach ($mediosTec as $medio)
                    <option value="{{ $medio->id }}">{{ $medio-> nom_medioTecnologico }}</option>  
                    @endforeach
                </select>
             
                <label for="acceso_internet">
                    ¿Cuenta con acceso a internet?*
                </label>

                <div class="radioButons">
                    @foreach($accesosInternet as $acceso)
                    
                    <label class="acceso_tec">
                        <div class="opc">

                        
                        <input type="radio" name="acceso_internet_id" id="acceso_internet_id" value="{{ $acceso->acceso_internet }}" required>
                        {{ $acceso->acceso_internet ? 'Si' : 'No' }}
                    </div>
                    </label><br>
                    @endforeach
                </div>
              

                <label for="regimen_salud">
                    Tipo de regimen de afiliacion*
                   </label>
                   <select name="regimen__salud_id" id="regimen__salud_id" required>
                    <option value="">Elija una opcion</option>
                    @foreach ($regimens as $regimen)
                    <option value="{{ $regimen->id }}">{{ $regimen->tipo_regimen }}</option>
                        
                    @endforeach
                </select>
             
                <label for="correo_electronico">
                    Correo_electronico*
                </label>
                <input type="email" name="correo_electronico" id="correo_electronico">

             <!-- {{--  ACA TERMINA EL DIV HIJO Y EL PADRE   --}} -->
            </div>
        </div>
        <div>
            <input type="submit" id="botonn" value="CREAR CUENTA">
        </div>
        </form>

        @if($errors->any())
        @foreach ($errors->all() as $error )
        <p>{{ $error }}</p>
            
        @endforeach
        @endif
    </div>       
</body>
</html>