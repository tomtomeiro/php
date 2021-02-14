<!DOCTYPE html>
<html>
<head>
	<title>Formulario HTML</title>
</head>
<body>
	<h1>Formulario HTML</h1>
	<h1>Introduzca el precio de 3 productos </h1>
	<form method="POST" action="recibir.php">
		<p>
			<h3>Introduzca el tamaño del cilindro </h3>
			<label for="tamano">tamaño</label>
			<input type="decimal" name="tamano"/>
		</p>
		<p>
			<h3>introduzca el radio del cilindro</h3>
			<label for="radio">radio</label>
			<input type="decimal" name="radio"/>
		</p>
		<p>
			<h3>Introduzca los litros del llenado del cilindro</h3><br>
			<label for="litros">litros</label>
			<input type="decimal" name="litros"/>
		</p>
		<input type="submit" value="Enviar datos">	
	</form>

</body>
</html>

<?php
?>