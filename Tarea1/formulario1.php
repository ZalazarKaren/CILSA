<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #message {
            display: none; /* Ocultar el mensaje por defecto */
            margin-top: 20px;
            color: #28a745; /* Color verde para el mensaje de éxito */
            font-size: 1.1em;
        }
    </style>
    <script>
        function validarFormulario(event) {
            event.preventDefault(); // Evita el envío del formulario

            var email = document.getElementById('email').value;
            var nombre = document.getElementById('nombre').value;
            var apellido = document.getElementById('apellido').value;

            // Validación de campo de nombre
            if (nombre.trim() === "") {
                alert("El campo Nombre es obligatorio.");
                return false;
            }

            // Validación de campo de apellido
            if (apellido.trim() === "") {
                alert("El campo Apellido es obligatorio.");
                return false;
            }

            // Validación de email
            if (email.indexOf('@') === -1) {
                alert("El campo Email debe contener un '@'.");
                return false;
            }

            // Mostrar mensaje de confirmación si todas las validaciones pasan
            document.getElementById('message').style.display = 'block';

            return false; // Evita el envío del formulario
        }
    </script>
</head>
<body>
    <!--Inicio del Formulario-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Formulario de Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <form id="myForm" onsubmit="validarFormulario(event)">
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
                        <div id="message">¡Formulario enviado correctamente!</div>
                        <!-- Botones adicionales de los estilos del Formulario -->
                        <div class="mt-3 text-center">
                            <a href="formulario1.php" class="btn btn-secondary btn-block">Estilo 1</a>
                            <a href="formulario2.php" class="btn btn-secondary btn-block">Estilo de Alto Contraste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin del Formulario-->
</body>
</html>
