<?php
		require("conexion.php");
$stmt2=$conn->prepare("SELECT Id_rol FROM usuario WHERE N_identificacion=:usuario");
$usuario = $_POST["N_identificacion"];
$stmt2->bindParam(":usuario", $usuario);
$stmt2->execute();
foreach ($stmt2 as $key) {
    $rol = $key['Id_rol'];
}
if ($rol =='R1') {
    $TipoDocu=$_POST["TipoDoc_Clie"];
    $usuario = $_POST["N_identificacion"];
    $contrasena = $_POST["Contrasena"];
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE TipoDoc_Clie = :TipoDocu AND N_identificacion= :usuario AND Contrasena= :contrasena");
    $stmt->bindParam(":TipoDocu", $TipoDocu);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":contrasena", $contrasena);
    $stmt->execute();
    $valida = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {
            $count = $stmt -> rowCount();
            session_start();
            $_SESSION['N_identificacion2'] = $valida["N_identificacion"];
            $_SESSION['Nombre_Usuario2'] = $valida["Nombre_Usuario"];
            echo $rol;
        }else {
            $count = $stmt -> rowCount();
            echo $count;
        }
}else if($rol =='R2' ){
    $TipoDocu=$_POST["TipoDoc_Clie"];
    $usuario = $_POST["N_identificacion"];
    $contrasena = $_POST["Contrasena"];
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE TipoDoc_Clie = :TipoDocu AND N_identificacion= :usuario AND Contrasena= :contrasena");
    $stmt->bindParam(":TipoDocu", $TipoDocu);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":contrasena", $contrasena);
    $stmt->execute();
    $valida = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {
            $count = $stmt -> rowCount();
            session_start();
            $_SESSION['N_identificacion'] = $valida["N_identificacion"];
            $_SESSION['Nombre_Usuario'] = $valida["Nombre_Usuario"];
            echo $rol;
        }else {
            $count = $stmt -> rowCount();
            echo $count;
        }
}else if($rol == 'R3'){
    $TipoDocu=$_POST["TipoDoc_Clie"];
    $usuario = $_POST["N_identificacion"];
    $contrasena = $_POST["Contrasena"];
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE TipoDoc_Clie = :TipoDocu AND N_identificacion= :usuario AND Contrasena= :contrasena");
    $stmt->bindParam(":TipoDocu", $TipoDocu);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":contrasena", $contrasena);
    $stmt->execute();
    $valida = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {
            $count = $stmt -> rowCount();
            session_start();
            $_SESSION['N_identificacion3'] = $valida["N_identificacion"];
            $_SESSION['Nombre_Usuario3'] = $valida["Nombre_Usuario"];
            echo $rol;
        }else {
            $count = $stmt -> rowCount();
            echo $count;
        }
}
	