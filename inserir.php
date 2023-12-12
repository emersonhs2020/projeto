<html>

	<head>
	
		<title> ....: Registo de Utente :... </title>

<style>
        body {

            background-image: url("fundo.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        
    </style>
		
	</head>
	
	<body>
	
		<center>
		
		<?php
		
		
		// variável receber a função para conectar ao banco de dados.  
		// SINTAXE mysqli_conect("servidor", "utiilzador", "palavra passe", "Banco de Dados");
		
		
		$conn = mysqli_connect("localhost", "root", "", "utente");
		
		
		// 2 Variáveis refente ao campo do formulário cadastro
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		
		// variável a usar o comando para inserir dados na tabela
		$sql ="INSERT INTO pessoas VALUES('$nome','$email')"; 
		//$sql ="UPDATE animais SET nome = jose WHERE email = 'jose@gmail.com'";
		
		
		if(mysqli_query ($conn, $sql)){
		
			echo "Dados inseridos com sucesso";
		
		}
		
		//header("Location: http://localhost/utente/");
		
		?>
		
		</center>
		
	</body>
	
</html>