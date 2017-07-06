<html>
    <head>
        <meta charset="UTF-8">
        <!--Link com a fonte externa -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <!--Link para arquivo css -->
        <link rel="stylesheet" type="text/css" href="css/colecao.php">
        <!--Link para Arquivo Booststrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <!--Link para Arquivo Bootstrap-->
        <link href="css/style.css" rel="stylesheet"> 
        <!--Links para responsividade -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widht=device-widht, initial-scale=1">
        
        <!--Funções JavaScript -->
        <script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location='painel.php'",5000);
            }
            function loginfailed() {
                setTimeout("window.location='index.php'",5000);
            }
        </script>    
        
        <!--Título da Página -->
        <title> Login </title>
    </head>
    
    <body background="img/fundo.jpg">
        <?php
            //CRIA A CONEXÃO COM O BANCO
		$host = "localhost";
		$user = "root";
		$pass = "";
		$banco = "colecao";
		$conexao = mysqli_connect($host, $user, $pass, $banco) ;
		if(!$conexao){
                    echo("erro");
                }                
	?>
        
        <?php
        //Pega os dados informados pelo usuário anteriormente
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$email' and senha='$senha'");
            $row = mysqli_num_rows($sql);
            
            if($row > 0){
                session_start();
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['senha'] = $_POST['senha'];
                    echo("Você Foi Logado !");
                    echo "<script>loginsucessfully()</script>";
            }else{
                echo("Falha no Login, por favor tente novamente !");
                echo "<script>loginfailed()</script>";
            }
            
            
        ?>
        
        
    </body>
</html>