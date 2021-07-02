<?php 
include_once "Conexion.php";
$stmt = $conn->prepare("SELECT * FROM usuario WHERE Id_rol = 'R3'");
$stmt->execute();
$dato=$stmt;
if ($dato->rowCount()>0) {
    foreach ($dato as $key) {
        $id = $key['Id_rol'];
        $nombre = $key['Nombre_Usuario'];
        $rol = $key['Id_rol'];
        $idcandidato = $key['Id_curso'];
        $identificacion = $key['N_identificacion'];
        $insertadatos=$conn->prepare("INSERT INTO candidato (Id_candidato, Nombre_Usuario, Id_rol, N_identificacion) VALUES(?,?,?,?)");
$insertadatos->bindParam(1, $idcandidato);
    $insertadatos->bindParam(2, $nombre);
    $insertadatos->bindParam(3, $rol);
    $insertadatos->bindParam(4, $identificacion);
    $insertadatos->execute();
    }
}
