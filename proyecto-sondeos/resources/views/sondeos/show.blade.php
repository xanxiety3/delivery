<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ $sondeo->titulo }}</h1>
        <p>{{ $sondeo->descripcion }}</p>
        <p>Fecha de Apertura: {{ $sondeo->fecha_apertura }}</p>
        <p>Fecha de Cierre: {{ $sondeo->fecha_cierre }}</p>
        <p>Filtro de Perfil: {{ $sondeo->filtro_perfil }}</p>
        <img src="{{ $sondeo->icono_sondeo }}" alt="">
    
        <hr>
        <div class="container">
            <h2>Crear Pregunta</h2>
            <form action="/createPregunta" method="POST">
                @csrf
        
                <!-- Campo de Contenido -->
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <input type="text" name="contenido" id="contenido" class="form-control" required>
                </div>
        
                <!-- Tipo de Respuesta -->
                <div class="form-group">
                    <label for="tipo_respuesta_pregunta">Tipo de Respuesta</label>
                    <select name="tipo_respuesta_pregunta_id" id="tipo_respuesta_pregunta_id" class="form-control" required>
                        <option value="">Elija una opcion</option>
                    @foreach ($tiposDeRespuesta as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->tipos_respuestas }}</option>
                        
                    @endforeach
                    </select>
                </div>
        
                <!-- Opciones (oculto por defecto) -->
                <div id="opciones-container" class="form-group" style="display: none;">
                    <label for="opciones">Opciones</label>
                    <div id="opciones-list">
                        <!-- Lista de Opciones -->
                    </div>
                    <button type="button" id="add-option" class="btn btn-secondary">Agregar Opción</button>
                </div>
        
                <!-- ID del Sondeo (oculto) -->
                <input type="hidden" name="sondeo_id" value="{{ $sondeo->id }}">
                <!-- ID de Pregunta (oculto) -->
                <input type="hidden" id="pregunta_id" name="pregunta_id" value="2">
    
        
                <!-- Botón de Enviar -->
                <button type="submit" class="btn btn-primary">Guardar Pregunta</button>
            </form>
        </div>
    </div>    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipoRespuestaSelect = document.getElementById('tipo_respuesta_pregunta_id');
            const opcionesContainer = document.getElementById('opciones-container');
            const opcionesList = document.getElementById('opciones-list');
            const addOptionButton = document.getElementById('add-option');
            
            let optionCount = 0;
        
            // Obtenemos el ID del tipo de respuesta para "respuesta_unica"
            // Aquí puedes definir el ID correspondiente
            const respuestaUnicaId = @json($respuestaUnicaId);
        
            tipoRespuestaSelect.addEventListener('change', function() {
                if (tipoRespuestaSelect.value == respuestaUnicaId) {
                    opcionesContainer.style.display = 'block';
                } else {
                    opcionesContainer.style.display = 'none';
                    // Limpia las opciones cuando el tipo de respuesta cambia
                    opcionesList.innerHTML = '';
                    optionCount = 0;
                }
            });
        
            addOptionButton.addEventListener('click', function() {
                optionCount++;
                const optionDiv = document.createElement('div');
                optionDiv.className = 'option-item';
                optionDiv.innerHTML = `
                    <input type="text" name="opciones[]" class="form-control" placeholder="Opción ${optionCount}" required>
                    <button type="button" class="btn btn-danger btn-sm remove-option" onclick="removeOption(this)">Eliminar</button>
                    <br><br>
                `;
                opcionesList.appendChild(optionDiv);
            });
        });
        
        function removeOption(button) {
            button.parentElement.remove();
        }
        </script>

        @if($errors->any())
        @foreach ($errors->all() as $error )
        <p>{{ $error }}</p>
            
        @endforeach
        @endif        
    </body>
    </html>
</body>
</html>