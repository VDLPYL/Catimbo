<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
		$servicio = $row['servicio'];
		$desde = $row['desde'];
		$hasta = $row['hasta'];
		$telefono = $row['telefono'];
		$comentario = $row['comentario'];
		$valor = $row['valor'];
	    $fechareg = $row['fecha_reg'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
					<b>servicio: </b> <?php echo $servicio ?><br>
					<b>desde: </b> <?php echo $desde ?><br>
					<b>hasta: </b> <?php echo $hasta ?><br>
					<b>telefono: </b> <?php echo $telefono ?><br>
					<b>comentario: </b> <?php echo $comentario ?><br>
					<b>valor: </b> <?php echo $valor ?><br>
        		    <b>Fecha de envío: </b> <?php echo $fechareg ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>