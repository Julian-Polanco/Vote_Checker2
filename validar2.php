<?php
	if($_POST) {
		require("conexion.php");
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
                echo $count;
            }else {
                $count = $stmt -> rowCount();
                echo $count;
            }
	}
 ?>
