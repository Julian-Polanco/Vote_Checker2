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
<link rel="stylesheet" type="text/css" href="css/admin.css"> 
<link rel="stylesheet" href="css/fonts/style.css">
    <meta charset="UTF-8">
    <link rel="icon" href="images/icono6.ico">
    <title>Cargo Personeria</title>
       <link rel="stylesheet" href="css/estilos.css">
       <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css"> 
       <link rel="shortcut icon" href="images/escudobarra.png">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">       
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/3c32b9d0c9.js" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>

   
   <!-- Barra navegaciòn -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="line-height: 3.9; font-size: 1.3rem;">
  <div class="container-fluid">
  <a class="navbar-brand" href="principal.php">
      <img style=margin-left:20px; src="images/escudobarra.png" alt="" width="80" height="80" class="d-inline-block align-top">
      I.E Julio Cesar Turbay Ayala
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <li style=margin-left:20px; class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal.php">Inicio</a>
        </li>
        <!-- DropDown -->
        <li style=margin-left:20px; class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conocer Cargos
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="cargop_ersoneria.php">Conocer cargo a personería</a></li>
            <li><a class="dropdown-item" href="cargo_contraloria.php">Conocer cargo a contraloría</a></li>
          </ul>
        </li>
        <!-- DropDown Termina -->
        <!-- DropDown #2 Empieza -->
        <li style=margin-left:20px; class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conocer Propuestas
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="propuestas_pu.php">Conocer propuetas a personería</a></li>
            <li><a class="dropdown-item" href="propuestas_cu.php">Conocer propuetas a contraloría</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
      <li style="margin-left:20px; list-style:none"; class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['Nombre_Usuario'];?>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
           
            <li><a class="dropdown-item" href="cerrarsession.php">Cerrar Sesion</a></li>
          </ul>
        </li>
    
</nav>
<br>

<h1 style="margin-left:30%;"> PERSONERIA ESTUDIANTIL </h1>
    <h2 style="margin-left:27%; ">FUNCIONES PERSONERIA ESTUDIANTIL </h2>
    <br>
    <h5 style=" margin-left:5%; width: 90%;">1- Promover el cumplimiento de los derechos y deberes de los estudiantes, para lo cual podrá utilizar los medios de comunicación interna del establecimiento, pedir la colaboración del consejo de estudiantes, organizar foros u otras formas de deliberación.</h5>
    <br>
    <h5 style=" margin-left:5%; width: 90%;">2- Recibir y evaluar las quejas y reclamos que presenten los educandos sobre lesiones a sus derechos y las que formule cualquier persona de la comunidad sobre el incumplimiento de las obligaciones de los alumnos.<h5>
           <br>
            <h5 style=" margin-left:5%; width: 90%;">3- Presentar ante el rector o el Director Administrativo, según sus peticiones, las solicitudes que considere necesarias para proteger los derechos de los estudiantes y facilitar el cumplimiento de sus deberes.<h5>
                    <br>
                    <h5 style=" margin-left:5%; width: 90%;">4- Cuando considere necesario apelar ante el consejo directivo o el organismo que haga sus veces, las decisiones del rector respecto a las peticiones presentadas por su intermedio.<h5>
                           <br>
                          
                            <h5 style=" margin-left:5%; width: 90%;">5- Permanente defensa de los intereses de los estudiantes.</h5>
                           <br>
                            <h5 style=" margin-left:5%; width: 90%;">6- Promover y velar porque el estudiante actúe con libertad y respeto de conciencia.</h5>
                           <br>
                            <h5 style=" margin-left:5%; width: 90%;">7- Estar atento al cumplimiento del manual de Convivencia.</h5>
                          <br>
                           <h5 style=" margin-left:5%; width: 90%;">8- Asesorar con criterio serio al estudiante que sea sancionado para que interponga los recursos ante las autoridades del Plantel Educativo.</h5>
                           <br>
                            <h5 style=" margin-left:5%; width: 90%;">9- Instruir debidamente a los estudiantes que manifiesten la intención de formular alguna petición o queja.</h5>
                           <br>
                            <h5 style=" margin-left:5%; width: 90%;">10- Promover la ejecución de las leyes, disposiciones administrativas y Manual de Convivencia, que se refieran a la organización y actividad del establecimiento Educativo.</h5>
                            <br>


<footer class="text-center text-white" style="background-color: #0a4275;">
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="rd" href="https://www.facebook.com/Orientaci%C3%B3n-Escolar-Julio-Cesar-Turbay-113189405928970/" role="button" target="_blank">
      <i class="fab fa-facebook-f"></i></a>
      <!-- Twitter -->
      <a class="rd"  href="https://twitter.com/i_turbay?lang=es" role="button " target="_blank">
      <i class="fab fa-twitter"></i></a>
      <!-- Youtube -->
      <a class="rd" href="https://www.youtube.com/channel/UCiUCKJNiyxEiUTOigg_N1QA" role="button" target="_blank">
      <i class="fab fa-youtube"></i></a>
      <!-- Pagina Web -->
            <a class="rd" href="https://iejctaweb.wixsite.com/iejcturbayayala/" role="button" target="_blank">
            <i class="fab fa-google"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright By:
    <a class="text-white" href="#">Vote Checker</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>