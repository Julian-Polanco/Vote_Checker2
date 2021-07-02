<?php
//seguridad de sesion
session_start();
$varsession=$_SESSION['N_identificacion'];
if(!isset($_SESSION['N_identificacion'])){
  header("Location:pruebas.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icono6.ico">
    <link rel="stylesheet" type="text/css" href="css/estilovoto.css"> 
    <link rel="shortcut icon" href="images/escudobarra.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">       
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3c32b9d0c9.js" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Votar</title>
</head>
<body>
    <h1 class="Titulo">Voto a personeria</h1>
    <h2 class="subTitulo">Elige tu candidato y presiona en siguiente</h2>
<div id="C1" class="container-fluid mt-4" style="width: 95%;">   
<div class="row row-cols-1 row-cols-md-4 g-4">
 <?php
    include_once 'Conexion.php';
$stmt = $conn -> prepare("SELECT * FROM usuario WHERE Id_curso IN ('1101','1102','1103','1104') AND Id_rol='R3'");
$stmt->execute();
$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$contador=0;
foreach($datos as $fila){
    $nombre = $fila['Nombre_Usuario'];
    $cedula = $fila['N_identificacion'];
    $curso = $fila['Id_curso'];
    $contador +=1;
    ?>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="default<?php echo $contador ?>">
  <label class="form-check-label" for="default<?php echo $contador ?>">
  
<div class="col">

    <div id="<?php echo $curso ?>" class="border-primary card">
        <div class="justify-content-center aling-items-center">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDgwIDQ4MCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgwIDQ4MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNDAsMEMxMDcuNjY0LDAsMCwxMDcuNjY0LDAsMjQwYzAsNTcuOTYsMjAuNjU2LDExMS4xODQsNTQuOTkyLDE1Mi43MDRjMC4wODgsMC4xMiwwLjA5NiwwLjI3MiwwLjE5MiwwLjM4NA0KCQkJYzI0Ljc5MiwyOS44OTYsNTUuOTI4LDUyLjgxNiw5MC42MjQsNjcuNjI0YzAuNCwwLjE2OCwwLjc5MiwwLjM1MiwxLjE5MiwwLjUyYzIuODA4LDEuMTg0LDUuNjQ4LDIuMjgsOC40OTYsMy4zNTINCgkJCWMxLjEyLDAuNDI0LDIuMjQsMC44NTYsMy4zNzYsMS4yNjRjMi40NTYsMC44OCw0LjkyOCwxLjcxMiw3LjQxNiwyLjUxMmMxLjU5MiwwLjUxMiwzLjE4NCwxLjAxNiw0Ljc5MiwxLjQ5Ng0KCQkJYzIuMiwwLjY1Niw0LjQwOCwxLjI4OCw2LjYzMiwxLjg4OGMxLjk1MiwwLjUyOCwzLjkyLDEuMDE2LDUuODg4LDEuNDg4YzEuOTkyLDAuNDgsMy45OTIsMC45Niw2LDEuMzg0DQoJCQljMi4yNCwwLjQ4LDQuNTA0LDAuOTA0LDYuNzc2LDEuMzJjMS44MjQsMC4zMzYsMy42NCwwLjY4OCw1LjQ4LDAuOTg0YzIuNTIsMC40MDgsNS4wNTYsMC43MjgsNy42LDEuMDU2DQoJCQljMS42NCwwLjIwOCwzLjI3MiwwLjQ0OCw0LjkyLDAuNjI0YzIuODgsMC4zMDQsNS43ODQsMC41Miw4LjY5NiwwLjcyYzEuMzUyLDAuMDk2LDIuNjk2LDAuMjQsNC4wNTYsMC4zMTINCgkJCWM0LjI0OCwwLjI0LDguNTQ0LDAuMzY4LDEyLjg3MiwwLjM2OHM4LjYyNC0wLjEyOCwxMi44ODgtMC4zNTJjMS4zNi0wLjA3MiwyLjcwNC0wLjIxNiw0LjA1Ni0wLjMxMg0KCQkJYzIuOTEyLTAuMjA4LDUuODE2LTAuNDE2LDguNjk2LTAuNzJjMS42NDgtMC4xNzYsMy4yOC0wLjQxNiw0LjkyLTAuNjI0YzIuNTQ0LTAuMzI4LDUuMDgtMC42NDgsNy42LTEuMDU2DQoJCQljMS44MzItMC4yOTYsMy42NTYtMC42NDgsNS40OC0wLjk4NGMyLjI2NC0wLjQxNiw0LjUyOC0wLjg0LDYuNzc2LTEuMzJjMi4wMDgtMC40MzIsNC0wLjkwNCw2LTEuMzg0DQoJCQljMS45NjgtMC40OCwzLjkzNi0wLjk2OCw1Ljg4OC0xLjQ4OGMyLjIyNC0wLjU5Miw0LjQzMi0xLjIzMiw2LjYzMi0xLjg4OGMxLjYwOC0wLjQ4LDMuMi0wLjk4NCw0Ljc5Mi0xLjQ5Ng0KCQkJYzIuNDg4LTAuOCw0Ljk2LTEuNjMyLDcuNDE2LTIuNTEyYzEuMTI4LTAuNDA4LDIuMjQ4LTAuODQsMy4zNzYtMS4yNjRjMi44NTYtMS4wNzIsNS42ODgtMi4xNzYsOC40OTYtMy4zNTINCgkJCWMwLjQtMC4xNjgsMC43OTItMC4zNTIsMS4xOTItMC41MmMzNC42ODgtMTQuODA4LDY1LjgzMi0zNy43MjgsOTAuNjI0LTY3LjYyNGMwLjA5Ni0wLjExMiwwLjEwNC0wLjI3MiwwLjE5Mi0wLjM4NA0KCQkJQzQ1OS4zNDQsMzUxLjE4NCw0ODAsMjk3Ljk2LDQ4MCwyNDBDNDgwLDEwNy42NjQsMzcyLjMzNiwwLDI0MCwweiBNMzM3LjI1Niw0NDEuNzZjLTAuMTIsMC4wNTYtMC4yMzIsMC4xMi0wLjM1MiwwLjE3Ng0KCQkJYy0yLjg1NiwxLjM3Ni01Ljc2LDIuNjcyLTguNjg4LDMuOTM2Yy0wLjY2NCwwLjI4LTEuMzIsMC41NjgtMS45ODQsMC44NDhjLTIuNTYsMS4wNzItNS4xNTIsMi4wODgtNy43NiwzLjA2NA0KCQkJYy0xLjA4OCwwLjQwOC0yLjE3NiwwLjgwOC0zLjI3MiwxLjE5MmMtMi4zMTIsMC44MjQtNC42MzIsMS42MTYtNi45NzYsMi4zNjhjLTEuNDU2LDAuNDY0LTIuOTIsMC45MDQtNC4zODQsMS4zMzYNCgkJCWMtMi4wOCwwLjYyNC00LjE2OCwxLjIyNC02LjI4LDEuNzg0Yy0xLjc3NiwwLjQ3Mi0zLjU2OCwwLjkwNC01LjM2LDEuMzI4Yy0xLjg4LDAuNDQ4LTMuNzUyLDAuOTA0LTUuNjQ4LDEuMzA0DQoJCQljLTIuMDcyLDAuNDQtNC4xNiwwLjgxNi02LjI0LDEuMTkyYy0xLjY4OCwwLjMxMi0zLjM2OCwwLjY0LTUuMDcyLDAuOTEyYy0yLjM0NCwwLjM2OC00LjcxMiwwLjY2NC03LjA3MiwwLjk2DQoJCQljLTEuNDk2LDAuMTkyLTIuOTg0LDAuNDE2LTQuNDk2LDAuNTc2Yy0yLjY5NiwwLjI4OC01LjQxNiwwLjQ3Mi04LjEyOCwwLjY2NGMtMS4yMDgsMC4wOC0yLjQwOCwwLjIxNi0zLjYzMiwwLjI4DQoJCQljLTMuOTYsMC4yMDgtNy45MjgsMC4zMi0xMS45MTIsMC4zMnMtNy45NTItMC4xMTItMTEuOTA0LTAuMzJjLTEuMjE2LTAuMDY0LTIuNDE2LTAuMTkyLTMuNjMyLTAuMjgNCgkJCWMtMi43Mi0wLjE4NC01LjQzMi0wLjM3Ni04LjEyOC0wLjY2NGMtMS41MTItMC4xNi0zLTAuMzg0LTQuNDk2LTAuNTc2Yy0yLjM2LTAuMjk2LTQuNzI4LTAuNTkyLTcuMDcyLTAuOTYNCgkJCWMtMS43MDQtMC4yNzItMy4zODQtMC42LTUuMDcyLTAuOTEyYy0yLjA4OC0wLjM3Ni00LjE3Ni0wLjc2LTYuMjQtMS4xOTJjLTEuODk2LTAuNC0zLjc3Ni0wLjg1Ni01LjY0OC0xLjMwNA0KCQkJYy0xLjc5Mi0wLjQzMi0zLjU4NC0wLjg1Ni01LjM2LTEuMzI4Yy0yLjEwNC0wLjU2LTQuMi0xLjE2OC02LjI4LTEuNzg0Yy0xLjQ2NC0wLjQzMi0yLjkyOC0wLjg3Mi00LjM4NC0xLjMzNg0KCQkJYy0yLjM0NC0wLjc1Mi00LjY3Mi0xLjU0NC02Ljk3Ni0yLjM2OGMtMS4wOTYtMC4zOTItMi4xODQtMC43OTItMy4yNzItMS4xOTJjLTIuNjA4LTAuOTc2LTUuMi0xLjk5Mi03Ljc2LTMuMDY0DQoJCQljLTAuNjY0LTAuMjcyLTEuMzEyLTAuNTYtMS45NzYtMC44NGMtMi45MjgtMS4yNTYtNS44MzItMi41Ni04LjY5Ni0zLjkzNmMtMC4xMi0wLjA1Ni0wLjIzMi0wLjExMi0wLjM1Mi0wLjE3Ng0KCQkJYy0yNy45MTItMTMuNTA0LTUyLjU2OC0zMi42NzItNzIuNTc2LTU1Ljk1MmMxNS40NjQtNTYuOTQ0LDU5LjI0LTEwMi44NDgsMTE1LjU2LTEyMS4xMTJjMS4xMTIsMC42OCwyLjI3MiwxLjI4OCwzLjQxNiwxLjkyOA0KCQkJYzAuNjcyLDAuMzc2LDEuMzM2LDAuNzc2LDIuMDE2LDEuMTM2YzIuMzg0LDEuMjY0LDQuOCwyLjQ0OCw3LjI3MiwzLjUxMmMxLjg5NiwwLjgzMiwzLjg1NiwxLjUzNiw1LjgwOCwyLjI1Ng0KCQkJYzAuMzg0LDAuMTM2LDAuNzY4LDAuMjg4LDEuMTUyLDAuNDI0YzEwLjg0OCwzLjg0LDIyLjQ1Niw2LjA0LDM0LjYsNi4wNHMyMy43NTItMi4yLDM0LjU5Mi02LjA0DQoJCQljMC4zODQtMC4xMzYsMC43NjgtMC4yODgsMS4xNTItMC40MjRjMS45NTItMC43MiwzLjkxMi0xLjQyNCw1LjgwOC0yLjI1NmMyLjQ3Mi0xLjA2NCw0Ljg4OC0yLjI0OCw3LjI3Mi0zLjUxMg0KCQkJYzAuNjgtMC4zNjgsMS4zNDQtMC43NiwyLjAxNi0xLjEzNmMxLjE0NC0wLjY0LDIuMzEyLTEuMjQ4LDMuNDMyLTEuOTM2YzU2LjMyLDE4LjI3MiwxMDAuMDg4LDY0LjE3NiwxMTUuNTYsMTIxLjExMg0KCQkJQzM4OS44MjQsNDA5LjA4LDM2NS4xNjgsNDI4LjI0OCwzMzcuMjU2LDQ0MS43NnogTTE1MiwxNzZjMC00OC41MiwzOS40OC04OCw4OC04OHM4OCwzOS40OCw4OCw4OA0KCQkJYzAsMzAuODY0LTE2LjAwOCw1OC4wMjQtNDAuMTI4LDczLjczNmMtMy4xNTIsMi4wNDgtNi40MzIsMy44OC05LjgsNS40OGMtMC40LDAuMTkyLTAuNzkyLDAuMzkyLTEuMTkyLDAuNTc2DQoJCQljLTIzLjE2OCwxMC41MzYtNTAuNTkyLDEwLjUzNi03My43NiwwYy0wLjQtMC4xODQtMC44LTAuMzg0LTEuMTkyLTAuNTc2Yy0zLjM3Ni0xLjYtNi42NDgtMy40MzItOS44LTUuNDgNCgkJCUMxNjguMDA4LDIzNC4wMjQsMTUyLDIwNi44NjQsMTUyLDE3NnogTTQyMS44MzIsMzcwLjU4NGMtMTguMTM2LTUzLjU1Mi01OS41MTItOTYuODMyLTExMi4zNzYtMTE3LjM5Mg0KCQkJQzMzMC42LDIzNC4xNDQsMzQ0LDIwNi42NCwzNDQsMTc2YzAtNTcuMzQ0LTQ2LjY1Ni0xMDQtMTA0LTEwNHMtMTA0LDQ2LjY1Ni0xMDQsMTA0YzAsMzAuNjQsMTMuNCw1OC4xNDQsMzQuNTUyLDc3LjE5Mg0KCQkJYy01Mi44NjQsMjAuNTY4LTk0LjI0LDYzLjg0LTExMi4zNzYsMTE3LjM5MkMzMS42NzIsMzMzLjc5MiwxNiwyODguNzA0LDE2LDI0MEMxNiwxMTYuNDg4LDExNi40ODgsMTYsMjQwLDE2czIyNCwxMDAuNDg4LDIyNCwyMjQNCgkJCUM0NjQsMjg4LjcwNCw0NDguMzI4LDMzMy43OTIsNDIxLjgzMiwzNzAuNTg0eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" class="card-img-top" alt="...">
        </div>
      <hr class="text-primary">
      <div class="card-body">
        <h5 class="card-title"><?php echo $nombre;?></h5>
        <p id="cedula" class="card-text">Tarjeton: <?php echo $curso ?></p>
      </div>
    </div>
  </div>
  </label>
</div>
  <?php
}
?>  
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col text-center">
    <button id="siguiente" class="btn btn-primary disabled">Siguiente</button>
    </div>
  </div>
</div>
<p id="selecciona" ></p>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
<script src="js/Proceso_de_votar.js"></script>

