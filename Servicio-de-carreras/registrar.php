<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['servicio']) >= 1) {
	    $name = trim($_POST['name']);
		$servicio = trim($_POST['servicio']);
		$desde = trim($_POST['desde']);
		$hasta = trim($_POST['hasta']);
		$telefono = trim($_POST['telefono']);
		$comentario = trim($_POST['comentario']);
		$valor = trim($_POST['valor']);
		date_default_timezone_set('Etc/GMT+5');
	    $fechareg = date("y/m/d h:i:s");

	    $consulta = "INSERT INTO usuarios(nombre, servicio, desde, hasta, telefono, comentario, valor, fecha_reg) 
		            VALUES ('$name','$servicio','$desde','$hasta','$telefono','$comentario','$valor','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡envio correcto!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>