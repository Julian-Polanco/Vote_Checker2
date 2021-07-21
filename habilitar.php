<?php
//seguridad de sesion
session_start();
$varsession = $_SESSION['N_identificacion2'];
if (!isset($_SESSION['N_identificacion2'])) {
  header("Location:pruebas.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" href="css/fonts/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>habilitar elecciones</title>
</head>
<body>
  <!-- barra azul -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="line-height: 3.9; font-size: 1.3rem;">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img style=margin-left:460px; src="images/escudobarra.png" alt="" width="80" height="80" class="d-inline-block align-top">
        I.E Julio Cesar Turbay Ayala
      </a>
    </div>
    
  </nav>
  <h1 class=menu><label for="btn-menu" class=icon-menu></label> Menu</h1> <br>
  <h1 class=admin><span class=icon-user-tie></span> <?php echo $_SESSION['Nombre_Usuario2']; ?></h1>
  <div class=btn-menu>
  </div>
  <div>
    <h1 class="Titulooo"><br>Habiliar Elecciones<p>
    </h1>
    <form action="" method="">
      <input class=cal type="date">
    </form>
    <form action="" method="">
      <input class=hor type="time">
    </form>
    <form action="" method="">
      <input class=hor2 type="time">
    </form>
    <a href="#"><input class=btni type="button" value="Iniciar Elecciones"> </a>
    <h1 class=fech><span class=icon-calendar></span> Fecha de inicio </h1>
    <h1 class=hora><span class=icon-clock></span> Hora de inicio </h1>
    <h1 class=hora2><span class=icon-clock></span> Hora de fin</h1>
    <input type="checkbox" id="btn-menu">
    <div class=container-menu2>
      <div class=cont-menu>
        <nav>
          <li><a href="admin.php"><span class=icon-home3></span> Inicio</a></li>
          <li><a href="propuestas_p.php"><span class=icon-user></span> propuestas de pesoneria</a></li>
          <li><a href="propuestas_c.php"><span class=icon-user></span> propuestas de contraloria</a></li>
          <li><a href="habilitar.php"><span class=icon-switch></span> Habiliar elecciones</a></li>
          <li><a href="#"><span class=icon-eye></span> Ver proceso de elecciones</a></li>
          <li><a href="#"><span class=icon-calculator></span> Resultados</a></li>
          <li><a href="#"><span class=icon-exit></span> Cerrar sesion</a></li>
        </nav>
        <label for="btn-menu" class=icon-cancel-circle></label>
      </div>
    </div>
    <div class="conpi">
      <footer class="text-center text-white" style="background-color: #0a4275;">
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="rd" href="https://www.facebook.com/Orientaci%C3%B3n-Escolar-Julio-Cesar-Turbay-113189405928970/" role="button" target="_blank">
              <i class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a class="rd" href="https://twitter.com/i_turbay?lang=es" role="button " target="_blank">
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
    </div>
</body>
</html>