<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['N_identificacion'])) {
    $varsession = $_SESSION['N_identificacion3'];
  }else{
    $varsession = $_SESSION['N_identificacion'];
  }
  if (!isset($varsession)) {
    header("Location:pruebas.php");
  }

$candidato = $_POST['idCandidato'];
$tarjeton = "C1";
include_once "Conexion.php";
$stmt = $conn->prepare("SELECT N_tarjeton FROM tarjeton");
$stmt->execute();
$dato = $stmt;
if ($dato->rowCount() > 0) {
    foreach ($dato as $key) {
        $id = $key['N_tarjeton'];
    };
} else {
    echo "algo falta";
};
for ($i = 0; $i <= $dato->rowCount(); $i++) {
    $nuevoid = "T" . ($i + 1);
};
$insertaTarjeton = $conn->prepare("INSERT INTO tarjeton (N_tarjeton, Id_categoria) VALUES (?,?)");
$insertaTarjeton->bindParam(1, $nuevoid);
$insertaTarjeton->bindParam(2, $tarjeton);
$insertaTarjeton->execute();
if ($insertaTarjeton->rowCount() > 0) {
    echo $insertaTarjeton->rowCount();
} else {
    echo "algo fala";
};
$datosProceso = $conn->prepare("SELECT * FROM proceso_eleccion");
$datosProceso->execute();
if ($datosProceso->rowCount() > 0) {
    foreach ($datosProceso as $cuantos) {
        $hay = $cuantos['Id_pe'];
    };
    for ($j = 0; $j <= $datosProceso->rowCount(); $j++) {
        $idProcesoEleccion = "PEP" . ($j + 1);
    };
} else {
    echo "algo falta";
};
$ValidaVotoPersonero = $conn->prepare("INSERT INTO proceso_eleccion (Id_pe, N_identificacion, N_tarjeton, Id_candidato) VALUES (?, ?, ?, ?)");
$ValidaVotoPersonero->bindParam(1, $idProcesoEleccion);
    $ValidaVotoPersonero->bindParam(2, $varsession);

$ValidaVotoPersonero->bindParam(3, $nuevoid);
$ValidaVotoPersonero->bindParam(4, $candidato);
$ValidaVotoPersonero->execute();
if ($ValidaVotoPersonero->rowCount() > 0) {
    echo $ValidaVotoPersonero->rowCount();
} else {
    echo "algo falta";
};
