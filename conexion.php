<?php
$host = 'localhost';
$dbname = 'nombre_de_tu_base_de_datos';
$user = 'tu_usuario';
$password = 'tu_contraseña';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa"; 
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

?>
