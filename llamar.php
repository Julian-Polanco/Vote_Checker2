<?php
function obtenercurso($Id_Grado){
include_once 'Conexion.php';
$stmt = $conn->prepare("SELECT * FROM curso WHERE Id_Grado= $Id_Grado");
$stmt->execute();
$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = array();
foreach($datos as $row){
    $json[] = array(
        'Id_curso' => $row['Id_curso'],
    );
}
$jsonstring = json_encode($json);
    echo $jsonstring;
}
obtenercurso($_GET["Id_Grado"]);
