<html>
	<head>
	<title> ....: Consultar Registos :... </title>
	</head>
	<body>
	<center>
		<h1> Consulta </h1>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "utente");
						
		$exibe = "SELECT * FROM pessoas";
		
		$exibe = mysqli_query($conn, $exibe);
		
		while($mostra = mysqli_fetch_assoc($exibe)){
				
			echo  $mostra['nome'] . "<br>";

			echo  $mostra['email']. "<br><hr>";	
		}
		?>
		</center> </body>
	</html>