<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// CONEXION mysqli_connect('servidor', 'usuario', 'contraseña', 'tabla')

$conexion = mysqli_connect('localhost', 'root', '', 'hogar_giribone') or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas_giribone VALUES(DEFAULT, '$nombre', '$email', '$mensaje')");

mysqli_close($conexion);

header('Location:contacto.php?ok');