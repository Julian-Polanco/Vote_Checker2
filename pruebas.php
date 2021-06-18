<?php
session_start();
if(isset($_SESSION['N_identificacion'])){
  header("Location:Principal.php");
}
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
   <head> <!-- Aca yo programe el boton gris -->
       <meta charset="utf-8">
       <link rel="icon" href="images/icono6.ico">
       <title>Inicio</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="shortcut icon" href="images/escudobarra.png">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">       
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>       <script src="https://kit.fontawesome.com/3c32b9d0c9.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
   <body>
    <!-- Barra navegaciòn -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="line-height: 3.9; font-size: 1.3rem;">
  <div class="container-fluid">
  <a class="navbar-brand" >
      <img style=margin-left:40px; src="images/escudobarra.png" alt="" width="80" height="80" class="d-inline-block align-top">
      I.E Julio Cesar Turbay Ayala
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <a href="login.php" class="btn btn-outline-secondary m-2" tabindex="-1" role="button" aria-disabled="true" style="color: #fff; border-color: #fff;"><i class="fas fa-user"></i> Iniciar Sesion</a> -->
      <!-- <a  class="btn-abrir-popup" id="btn-abrir-popup" tabindex="-1" role="button" aria-disabled="true" style="color: #000; border-color: #fff; background-color: #fff;"><i  class="btn-abrir-popup"></i> Registrarse</a> -->
      <button  id="btn-abrir-popup2"><i class="fas fa-user"></i> Iniciar Sesion</button>
      <button id="btn-abrir-popup" class="btn-abrir-popup"><i class="fas fa-user-edit"></i> Registrarse</button>
    </div>
  </div>
</nav>
   <!-- Barra de Navegacion Fin -->
   <!-- Fondo de Pagina -->
      <div class="image-fondo fondo">
   <!-- Fonde de Pagina Fin -->
   <!-- Cuerpo de Pàgina -->
   <h1 class="Titulo"><br>BIENVENIDOS A LAS ELECCIONES A PERSONERO Y CONTRALOR ESTUDIANTIL 2021<p></h1>
<!-- Carrusel 2 -->
<div id="carouselExampleControls" class="carousel slide translateY(2%)" data-bs-ride="carousel" style="margin-top:100px;transform: translate(0%, -10%);" >
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="images/imagen1.jpg" class="d-block w-500 d-block mx-auto" alt="500"  width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen2.jpg" class="d-block w-500 d-block mx-auto" alt="500"  width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen3.jpg" class="d-block w-500 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen4.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen5.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen6.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen7.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen8.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen9.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen10.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen11.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
    <div class="carousel-item">
      <img src="images/imagen12.jpg" class="d-block w-600 d-block mx-auto" alt="600" width="1130" height="550">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
<footer class="text-center text-white" style="background-color: #0a4275;">
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Orientaci%C3%B3n-Escolar-Julio-Cesar-Turbay-113189405928970/" role="button" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/i_turbay?lang=es" role="button " target="_blank"
        ><i class="fab fa-twitter"></i
      ></a>
      <!-- Youtube -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCiUCKJNiyxEiUTOigg_N1QA" role="button" target="_blank"
        ><i class="fab fa-youtube"></i
      ></a>
      <!-- Pagina Web -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://iejctaweb.wixsite.com/iejcturbayayala/" role="button" target="_blank"
        ><i class="fab fa-google"></i
      ></a>
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
</div>
</div>
<!-- aca va el fomulario de iniciar sesion -->
<div class="contenedor-inicio">
		<div class="overlay-inicio" id="overlay-inicio">
            <!-- division que contiene al pop up de registrarse -->
			<div class="popup-inicio" id="popup-inicio">
				<a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
				<h3>INICIAR SESION</h3>
				<h4>Ingresa Tus Datos A Continuacion.</h4>
			<form id="iniciarsesion" name="iniciarsesion" action="">
				<div class="contenedor-inputs2">
                    <p><select class="tipodocu" name="TipoDoc_Clie" > 
                        <option  disabled selected>Tipo de documento</option>
                        <option>Tarjeta de Identidad</option>
                        <option>Cedula de Cuidadania</option>
                        <option>Cedula de Extranjeria</option>
                        <option>Registro Civil</option>
                    </select> </p>
                    <p><input  type="text" name="N_identificacion"  placeholder="Ingrese Su Numero De Documento"></p>
                    <p><input  type="password" name="Contrasena" placeholder="Ingrese Su Contraseña"></p>
                    <?php
                    ?>
                        <!-- <input  type="hidden" name="TipoConsulta" value="Insertar" > -->      
				</div>
					<input type="submit" id="enviarsesion" class="btn-submit2" value="Iniciar Sesion">
			</form>
			</div>
		</div>
	</div>
<!-- aca va formulario registro en pop up -->

		<div class="overlay" id="overlay">
            <!-- division que contiene al pop up de registrarse -->
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>REGISTRATE</h3>
				<h4>todos los campos son obligatorios.</h4>
			<form name="registrar" action="" method="POST">
				<div class="contenedor-inputs">                    
                    <p><select class="tipodocu" name="TipoDoc_Clie" > 
                        <option  disabled selected>Tipo de documento</option>
                        <option>Tarjeta de Identidad</option>
                        <option>Cedula de Cuidadania</option>
                        <option>Cedula de Extranjeria</option>
                        <option>Registro Civil</option>
                    </select> </p> 
                    <p><input  type="text" name="N_identificacion"  placeholder="Ingrese Su Numero De Documento"></p>
                    <p><input type="text" name="Nombre" placeholder="Ingrese Su Nombre"></p>
                    <p><input  type="password" name="Contraseña" placeholder="Establezca una Contraseña"></p>
                    <p><select class="rol" name="Id_rol" > 
                        <option  disabled selected>Elija su Rol</option>
                        <option value="R2">Estudiante</option>
                        <option value="R1">Rector</option>
                        <option value="R3" >Candidato</option>
                    </select> </p> 
                    <Select  class="grado" name="grado" id="grado"> 
                    </Select>
                    <Select  name="curso" id="curso" class="curso">
                    </select>
				</div>
					<input id="registro" name="Enviaregistro"type="submit" class="btn-submit" value="Registrarme">
			</form>
      </div>
			</div>
      <div id="alert_error" class="contenedor-inicio"></div>
	
  <?php 
include_once 'Conexion.php';
if ($_POST['Enviaregistro']=='Registrarme'){
  $stmt = $conn->prepare("INSERT INTO usuario (TipoDoc_Clie, N_identificacion, Nombre_Usuario, Contrasena, Id_curso, Id_rol) VALUES (?, ?, ?, ?, ?, ?)");
  $TipoDoc_Clie = $_POST['TipoDoc_Clie'];
  $N_identificacion=$_POST['N_identificacion'];
  $Nombre=$_POST['Nombre'];
  $Contraseña=$_POST['Contraseña'];
  $Id_rol=$_POST['Id_rol'];
  $curso=$_POST['curso'];
  $stmt->bindParam(1, $TipoDoc_Clie);
  $stmt->bindParam(2, $N_identificacion);
  $stmt->bindParam(3, $Nombre);
  $stmt->bindParam(4, $Contraseña);
  $stmt->bindParam(5, $curso);
  $stmt->bindParam(6, $Id_rol);
  $stmt->execute();
  if ($stmt->rowCount()>0) {
    ?> <!-- desde aca va el alert modificado -->
    <div class="contenedor-inicio">
        <article>
          <!-- <button id="btn-abrir-popup" class="btn-abrir-popup">Registrarse</button> -->
                <!-- boton que abre ventana de registrarse -->
        </article>
        <div class="overlay-alert_registro" id="overlay-alert_registro">
                <!-- division que contiene al pop up de registrarse -->
          <div class="popup-alert_registro" id="popup-alert_registro">
            <a  id="btn-cerrar-alert_registro" class="btn-cerrar-alert_registro"><i class="fas fa-times"></i></a>
            <h3>DATOS REGISTRADOS CORRECTAMENTE</h3>
            <h4>¿Deseas ir a iniciar sesion?</h4>
            <div class="contenedor-alert_registro ">
            </div>
              <input id="btn-submit3" type="submit" class="btn-submit3" value="Ok">
              <input id="btn-submit4" type="submit" class="btn-submit4" value="Tal vez luego">
          </div>
        </div>
      </div> <?php
  } else {
    ?> <!-- desde aca va el alert modificado -->
    <div class="contenedor-inicio">
        <article>
          <!-- <button id="btn-abrir-popup" class="btn-abrir-popup">Registrarse</button> -->
                <!-- boton que abre ventana de registrarse -->
        </article>
        <div class="overlay-alert_registro" id="overlay-alert_registro">
                <!-- division que contiene al pop up de registrarse -->
          <div class="popup-alert_registro" id="popup-alert_registro">
            <a  id="btn-cerrar-alert_registro" class="btn-cerrar-alert_registro"><i class="fas fa-times"></i></a>
            <h3>OPS!! ALGO SALIO MAL</h3>
            <h4>Por Favor revisa los datos ingresados</h4>
            <div class="contenedor-alert_registro ">
            </div>
              <input id="btn-submit4" type="submit" class="btn-submit4" value="Ok">
          </div>
        </div>
      </div> 
      <?php
  }
  }
?>
  <script>
  var myCarousel = document.querySelector('#myCarousel')
  var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 1000,
  wrap: false
})
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
    <script src="js/select.js"></script>
	<script src="js/popup.js"></script>
  <script src="js/validacionconajax.js"></script>
</body> 
</html>