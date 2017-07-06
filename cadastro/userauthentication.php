


<html>
	<head>
		<title> Autenticando... </title>
		<script type="text/javascript">
			function loginsucessfully(){
				setTimeout("window.location='painel.php'",5000);
			}
			function loginfailed (){
				setTimeout("window.location='login.php'",5000);
			}
		</script>	
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
		
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email= '$email' and senha='$senha'");
			$row = mysqli_num_rows($sql);
			
			if($row > 0){
				session_start();
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['senha'] = $_POST['senha'];
					echo "<center> Você foi logado com sucesso </center> "; 
					echo "<script>loginsucessfully()</script>";
			} else{
				echo "<center> Nome e/ou senha incorretas, Aguarde para logar novamente </center>" ;
				echo "<script>loginfailed()</script>";
			}
			
		?>
	
	</body>
	
</html>
