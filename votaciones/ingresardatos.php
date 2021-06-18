<!DOCTYPE html>
<html lang="es">
   <head> <!-- Aca yo programe el boton gris -->
       <meta charset="utf-8">
       <link rel="icon" href="images/icono6.ico">
       <title>datos</title>
       <link rel="shortcut icon" href="images/escudobarra.png">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">       
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/3c32b9d0c9.js" crossorigin="anonymous"></script>
       <script>
         $(document).ready(function() {
         $(".dropdown-toggle").dropdown();
       });
       </script>
</head>
   <body  style="background: color #000;">
    <style>
h1{
   color:#CB0000
}
h2{
    font-size: 30px;
    color: rgb(9, 9, 9);
    font-weight: bolder;
    text-align:center ;
    font-family:"open sans",sans-serif;
}
h4{
    font-size: 30px;
    color: rgb(9, 9, 9);
    font-weight: bolder;
    text-align:center ;
    font-family:"open sans",sans-serif;
}
form{
    font-size: 30px;
    color: rgb(9, 9, 9);
    font-weight: bolder;
    text-align:center ;
    font-family:"open sans",sans-serif;
}
input{
   font-size:20px;
}
</style>
    <nav>
            <li><a class="submit" href="#">Volver Al Menú</a></li>
        </ul>
    </nav>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="emanuel2.css">
    <div class="login-box">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2>Ingresar Tus datos</h2> 
            <h4>Subir tu foto</h4> <br>
            <input type="file" value="subir imagen" name="foto" id="foto"><br>
			<input type="submit" value="Enviar Datos" name="enviardatos">           
        </form>       
    </div>
    <div class="logoindus">
                </div>
<?php
//INSERTAR.PHP
include "Conexion2.php";
    if($_POST['enviardatos']){
    $foto=$_FILES['foto']['name'];
    $ruta=$_FILES['foto']['tmp_name'];
    $destino="datosub/".$foto;
    $enviar = "INSERT INTO dato
    (foto) 
    values ('"."','".$destino."')";
            if (mysqli_query($mysqli, $enviar)) {
                //echo "Noticia guardada exitosamente";
                $message = "Producto guardado guardada exitosamente";
            echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                echo "Error: " . $enviar . "<br>" . mysqli_error($mysqli);
            }
        }
    ?>
    <footer class="text-center text-white" style="background-color: #0a4275;" ";>  
      <div class="container p-4 pb-0 " transform="translate(20%)">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Orientaci%C3%B3n-Escolar-Julio-Cesar-Turbay-113189405928970/" role="button" target="_blank">
      <i class="fab fa-facebook-f"></i></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/i_turbay?lang=es" role="button " target="_blank">
      <i class="fab fa-twitter"></i></a>
      <!-- Youtube -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCiUCKJNiyxEiUTOigg_N1QA" role="button" target="_blank">
      <i class="fab fa-youtube"></i></a>
      <!-- Pagina Web -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://iejctaweb.wixsite.com/iejcturbayayala/" role="button" target="_blank">
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
		</div>
	</div>
</body>
</html>