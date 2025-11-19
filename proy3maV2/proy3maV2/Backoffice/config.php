<?php
// Configuración de la base de datos
$hostname = '192.168.5.50';
$username = 'matias.fernandez';
$password = '57205108';
$database = 'matias_fernandez';
// Establecer conexión a la base de datos
$conn = mysqli_connect($hostname, $username, $password, $database);
// Verificar la conexión
if(!$conn){
	die('Connection failed: ' . mysqli_connect_error());
}
?>