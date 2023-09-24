<?php

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_persona";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["cumpleanos"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Query para insertar datos en la base de datos
$sql = "INSERT INTO registro (nombres, apellidos, fecha_nacimiento, correo, contrasena) VALUES ('$nombres', '$apellidos', '$fecha_nacimiento', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Registro exitoso. ¡Bienvenido, '.$nombres.'!");</script>';
    echo '<script>window.location.href = "../html/inicio.html";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Cerrar la conexión a la base de datos
$conn->close();
?>