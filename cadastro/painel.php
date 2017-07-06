<html>
	<head>
		<meta charset="utf-8">
		<title> Painel de Dados </title>
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
		//INICIA A SESSÃO PARA UM USUÁRIO LOGADO
			session_start();
			//VERIFICA SE O USURIO ESTA LOGADO, CASO NAO ESTEJA É REDIRECIONADO PARA PARA O LOGIN
			if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
				header("Location: login.php");
			} else{
				echo "<center> Você está logado </br> </center>";
			}
		?>
		<!--REDIRECIONA O USUARIO PARA PAGINA DE LOGOUT, ONDE ELE PODERÁ SAIR E LOGAR COM UMA CONTA DIFERENTE POR EXEMPLO -->
		<a href="logout.php">
			<input type="button" value="Sair"> </a>
		</br>
		<a href="busca.php">
			<input type="button" value="Buscar"> </a>
		
	</body>
</html>