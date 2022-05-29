<!DOCTYPE html>
<html>
<head>
	<title>VDLPYL-Servicio-de-carreras</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Servicio de carreras</h1>
    	<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="servicio" placeholder="Servicio de carreras">
		<input type="text" name="desde" placeholder="Desde">
		<input type="text" name="hasta" placeholder="Hasta">
		<input type="text" name="telefono" placeholder="teléfono">
		<input type="text" name="comentario" placeholder="comentario">
		<input type="int" name="valor" placeholder="valor">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>