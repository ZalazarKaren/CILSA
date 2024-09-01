<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Estilos para el modo oscuro */
        body {
            background-color: #000000; /* Fondo negro */
            color: #ffffff; /* Texto blanco */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            background-color: #1e1e1e; /* Fondo oscuro para la tarjeta */
            border-color: #333; /* Borde oscuro */
            width: 100%;
            max-width: 500px; /* Ancho máximo del formulario */
            margin: auto;
        }
        .card-header {
            background-color: #292929; /* Fondo más oscuro para el encabezado */
            border-bottom: 1px solid #444; /* Borde oscuro */
        }
        .form-control {
            background-color: #333; /* Fondo de los campos de entrada */
            color: #ffffff; /* Texto blanco */
            border-color: #444; /* Borde oscuro */
        }
        .form-control:focus {
            background-color: #444; /* Fondo al enfocarse */
            color: #ffffff;
            border-color: #555; /* Borde más claro al enfocarse */
        }
        .btn-primary, .btn-secondary {
            background-color: #ff69b4; /* Botón rosado */
            border-color: #ff69b4; /* Borde rosado */
            color: #ffffff; /* Texto blanco */
        }
        .btn-primary:hover, .btn-secondary:hover {
            background-color: #ff85c1; /* Botón rosado más claro al pasar el ratón por encima */
            border-color: #ff85c1;
        }
        label {
            color: #bbbbbb; /* Color de las etiquetas */
        }
        option {
            background-color: #333; /* Fondo de opciones del select */
            color: #ffffff; /* Texto blanco */
        }
        #message {
            display: none; /* Ocultar el mensaje por defecto */
            margin-top: 20px;
            color: #28a745; /* Color verde para el mensaje de éxito */
            font-size: 1.1em;
        }
    </style>
</head>
<body>
      
   <!--Inicio del Formulario-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Formulario de Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <form id="myForm" action="procesar_formulario.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="pais_residencia">País de Residencia:</label>
                                <select class="form-control" id="pais_residencia" name="pais_residencia" required>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Brasil">Brasil</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                        <div id="message">¡Formulario enviado con éxito!</div>
                    </div>
                </div>
                <!--Fin del Formulario-->
                

                <!-- Botones adicionales de los estilos del Formulario -->
                <div class="mt-3 text-center">
                    <a href="formulario1.php" class="btn btn-secondary btn-block">Estilo 1</a>
                    <a href="formulario2.php" class="btn btn-secondary btn-block">Estilo de Alto Contraste</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario para propósitos de demostración

            // Muestra el mensaje de confirmación
            document.getElementById('message').style.display = 'block';

            // Aquí podrías hacer el envío real del formulario si lo deseas:
            // this.submit();
        });
    </script>
</body>
</html>
