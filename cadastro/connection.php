	<?php
		//CRIA A CONEXÃO COM O BANCO
			$host = "localhost";
			$user = "root";
			$pass = "";
			$banco = "cadastro";
			$conexao = mysqli_connect($host, $user, $pass, $banco) ;
			if($conexao)
				echo("Conexao com o BD bem sucedida");
			else
				echo("erro");
		?>