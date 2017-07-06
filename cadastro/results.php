
<html>
	<head>
		<title> Resultados da Pesquisa </title>
	</head>
	<body>
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
		<?php
			$buscar=$_POST['busca'];
			$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE nome LIKE '%".$busca."%'");
			$row = mysqli_num_rows($sql);
			if($row > 0) {
				while($linha = mysqli_fetch_array($sql))
				$nome = $linha ['nome'];
				$sobrenome = $linha ['sobrenome'];
				$pais = $linha ['pais'];
				echo"<strong> Nome:</strong>".@$nome;
				echo "</br>";
				echo"<strong> Sobrenome:</strong>".@$sobrenome;
				echo"<br />";
				echo"<strong> Pais:</strong>".@$pais;
			} else{
				echo "Desculpe dado nao encontrado !";
			}
			
		?>
		
	</body>
</html>