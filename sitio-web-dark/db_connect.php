<?php
$host = 'mysql'; // Nombre del servicio en Docker
$user = 'root';
$password = 'root';
$database = 'hotel_el_paraiso';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>