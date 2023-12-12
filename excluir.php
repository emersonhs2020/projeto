<html>
	<head>
		<title> ....: Eliminar Registos :... </title>
		
	</head>
		<body>
			<center>
		<h1> Exclusão </h1>
		<?php
			
		$conn = mysqli_connect("localhost", "root", "", "utente");
						
		$excluir = "DELETE FROM pessoas";
		
	    $excluir = mysqli_query($conn, $excluir);
		
		echo "Dados excluidos com sucesso!";
				
		?>
		</center>
		</body>
	
</html>