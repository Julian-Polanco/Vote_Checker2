<html>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
</html>
<?php

$host = 'localhost';
$basededatos = 'vote_checker';
$usuario = 'root';
$contrasena = '';
$conexion = new mysqli($host, $usuario,$contrasena, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//CONSULTA

$tabla="";
$query="SELECT * FROM proceso_eleccion ORDER BY Id_pe";
$query="SELECT * FROM proceso_eleccion ORDER BY Id_pe";
//DIGITE UN NOMBRE DE UN ALUMNO
if(isset($_POST['datoenv']))
{
	$q=$conexion->real_escape_string($_POST['datoenv']);
	$query="SELECT * FROM proceso_eleccion WHERE 
		Id_pe LIKE '%".$q."%' OR
		N_identificacion LIKE '%".$q."%' OR
		N_tarjeton '%".$q."%' OR
		Id_candidato '%".$q."%' ";
        $query="SELECT * FROM candidato WHERE 
         Nombre_Usuario '%".$q."%' ";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="table table-striped">
		<tr class="bg-primary">
			<td>ID CANDIDATO</td>
			<td>ID ESTUDIANDE</td>
			<td>NUMERO DE TARJETON</td>
            <td>CURSO DEL CANDIDATO</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['Id_pe'].'</td>
			<td>'.$filaAlumnos['N_identificacion'].'</td>
			<td>'.$filaAlumnos['N_tarjeton'].'</td>
			<td>'.$filaAlumnos['Id_candidato'].'</td>
            
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
