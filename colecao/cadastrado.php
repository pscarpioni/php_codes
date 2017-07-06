<html>
    <head>
        <meta charset="UTF-8">
        <!--Link com a fonte externa -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <!--Link para arquivo css -->
        <link rel="stylesheet" type="text/css" href="css/colecao.css">
        <!--Link para Arquivo Booststrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <!--Link para Arquivo Bootstrap-->
        <link href="css/style.css" rel="stylesheet"> 
        <!--Links para responsividade -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widht=device-widht, initial-scale=1">
        
        <!--Link para imagem no cabeçalho  -->
        <link rel='icon' type='image/jpg' href="img/title.png">
        <!--Nome da Página --> 
        <title> Usuário Cadastrado </title>
       
        
    </head>
    
    <body background="img/fundo.jpg">
        <div id="title">
            </br>
            <p> Usuário foi cadastrado com sucesso ! </p>
        </div>
        
        </br>
        
        <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $banco = "colecao";
            $conexao = mysqli_connect($host, $user, $pass, $banco);
            
           //ARRUMAR CONEXÃO COM BANCO E LINK COM ARQUIVO CSS !!!!!!!!!!!
           
        ?>
        
        <!--Imagem-Link da pagina de login -->
        <a href="index.php">
            <center> <img src="img/home.png" style="width: 120px; height: 120px" title="Realizar Login"> </center> </a>
        
    </body>     
</html>