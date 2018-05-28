<!DOCTYPE html>
<html>
<head>
	<title>ORGANIZADOR DE ARQUIVOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<div class="principal container">

		<div class="header">
			<h1>Jogue qualquer coisa. Deixa que eu organizo.</h1><hr>
		</div>

		<div class="formus">

			<form action="logica.php" method="POST">
				
				<input type="file" name="arquivo" ><br><br>
				<button type="submit" name="enviar">enviar</button>

			</form>
			
		</div>

		<div class="content">

			<img src="img/lumeia_logo1.png" height="230" width="230">
			
		</div>

	</div>

</body>
</html>