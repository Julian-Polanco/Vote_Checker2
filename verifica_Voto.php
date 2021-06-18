<?php
session_start();
$varsession=$_SESSION['N_identificacion'];
if(!isset($_SESSION['N_identificacion'])){
  header("Location:pruebas.php");
}
include_once 'Conexion.php';
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt1 = $conn->prepare("SELECT * FROM usuario WHERE N_identificacion= :usuario");
$stmt2 = $conn->prepare("SELECT * FROM proceso_eleccion WHERE N_identificacion= :usuario");
$stmt1 -> bindParam(":usuario", $varsession);
$stmt1 -> execute();
$stmt2 -> bindParam(":usuario", $varsession);
$stmt2 -> execute();
$dato = $stmt1 -> fetchAll(PDO::FETCH_ASSOC);
$count = $stmt1 ->rowCount();
foreach($dato as $fila){
    $count = $stmt1 ->rowCount();
    echo $count;
    $usu = $fila['N_identificacion'];
    echo $usu;
}
?>