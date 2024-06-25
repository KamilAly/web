<?php
$servidor = "localhost";
$usuario = "root"; // Cambiado de "raíz" a "root", que es el usuario típico de MySQL en XAMPP
$clave = "";
$baseDeDatos = "kmerch";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['pass']; // Cambiado de 'pasar' a 'contraseña'
    $passco = $_POST['passco'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $colonia = $_POST['colonia'];
    $calle = $_POST['calle'];
    $numext = $_POST['numext'];
    $numint = $_POST['numint'];

    $insertarDatos = "INSERT INTO datos (nombre, usuario, correo, telefono, pass, passco, estado, municipio, colonia, calle, numext, numint)
                      VALUES ('$nombre', '$usuario', '$correo', '$telefono', '$pass', '$passco', '$estado', '$municipio', '$colonia', '$calle', '$numext', '$numint')";

    if (mysqli_query($enlace, $insertarDatos)) {
        echo "<p>Registro insertado correctamente.</p>";
        // Redirigir a la página principal después de 2 segundos
        echo '<meta http-equiv="refresh" content="2; URL=inicio.html">';
        exit; // Termina el script para evitar que se muestre el formulario nuevamente
    } else {
        echo "Error al insertar registro: " . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate en K Merch Paradise</title>
    <style>
    body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #F3E5F5, #CE93D8);
            font-family: Arial, sans-serif;
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.6);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }

        .signup-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
            font-size: 1.5rem;
        }

        .signup-container input,
        .signup-container select {
            width: calc(100% - 2rem);
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.6);
            color: #333;
            font-size: 1rem;
        }

        .signup-container input[type="submit"] {
            background-color: #ff0080;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: calc(100% - 2rem);
            margin-top: 1rem;
            font-size: 1rem;
        }

        .signup-container input[type="submit"]:hover {
            background-color: #e60073;
        }

        .signup-container hr {
            border: none;
            border-top: 2px solid #ff0080;
            width: 100%;
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>
<div class="signup-container">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <hr>
    <hr>
    <h2>REGISTRESE</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="nombre">Ingrese su nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Usuario:</label>
            <input type="text" name="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="nombre">Correo:</label>
            <input type="email" name="correo" placeholder="Correo electrónico">
        </div>
        <div class="form-group">
            <label for="nombre">Telefono:</label>
            <input type="text" name="telefono" placeholder="Teléfono">
        </div>
        <div class="form-group">
            <label for="nombre">Contraseña:</label>
            <input type="password" name="pass" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <label for="nombre">Confirme su contraseña:</label>
            <input type="password" name="passco" placeholder="Confirmar contraseña">
        </div>
        <hr>
        <div class="form-group">
            <label for="nombre">Estado:</label>
            <input type="text" name="estado" placeholder="Estado">
        </div>
        <div class="form-group">
            <label for="nombre">Municipio:</label>
            <input type="text" name="municipio" placeholder="Municipio">
        </div>
        <div class="form-group">
            <label for="nombre">Colonia:</label>
            <input type="text" name="colonia" placeholder="Colonia">
        </div>
        <div class="form-group">
            <label for="nombre">Calle:</label>
            <input type="text" name="calle" placeholder="Calle">
        </div>
        <div class="form-group">
            <label for="nombre">Num. ext:</label>
            <input type="text" name="numext" placeholder="Número Exterior">
        </div>
        <div class="form-group">
            <label for="nombre">Num. int:</label>
            <input type="text" name="numint" placeholder="Número Interior">
        </div>

        <input type="submit" name="registro" value="Registrar">
        <input type="reset" name="vaciar">
    </form>
</div>
</body>
</html>


