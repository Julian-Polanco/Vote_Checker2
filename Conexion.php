<?php
$conn = null;
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
try{
    $conn=new PDO("mysql:host=$servidor;dbname=vote_checker", $usuario, $contrasena);
} catch(PDOException $e) {
    echo"Conexion fallida: " . $e->getMessage();
    exit;
}
return $conn;
?>