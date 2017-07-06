<html>
	<head>
		<meta charset="utf-8">
		<title> Cadastrando... </title>
	</head>

	<body>
		<?php
			$host = "localhost";
			$user = "root";
			$pass = "";
			$banco = "cadastro";
			$conexao = mysqli_connect($host, $user, $pass, $banco) ;
			if ($conexao)
				echo("Conexao com o BD bem sucedida");
			else
				echo("erro");
		?>

		</br>
		<?php
		//ATRIBUI OS DADOS DIGITADOS NO INDEX À VARIAVEIS PARA SEREM SALVAS NO BANCO
			$nome=$_POST['nome'];
			$sobrenome=$_POST['sobrenome'];
			$pais=$_POST['pais'];
			$estado=$_POST['estado'];
			$cidade=$_POST['cidade'];
			$email=$_POST['email'];
			$senha=$_POST['senha'];
	
			$sql = mysqli_query($conexao,"INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha) VALUES('$nome', '$sobrenome', '$pais',
			'$estado', '$cidade', '$email', '$senha')");
			
			echo("Bem vindo ao sistema " .$nome);
			
			
			
		?>
	</body>
</html>	