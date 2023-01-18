<?php
$host = 'localhost';
$ame = 'ame';
$root = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$localhost;ame=$ame", $root, $password);
    // establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa"; 
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

?>
