<?php
$servername = "root";
$username = "hostname";
$password = "1004625011";
$dbname = "CeluAccesoriosDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Si llegas a este punto, la conexión a la base de datos es exitosa
?>
