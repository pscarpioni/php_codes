<!DOCTYPE html>

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
        <!--Título da Página -->
        <title> Login de Usuário </title>
    </head>
    <body background="img/fundo.jpg">
        </br>
        </br>
        </br>
        <div id="title">
        <header class="row">  
            <div class="col-md-12">
                Bem Vindo ao Sistema ! </br> </br>
                <div id="text">
                    <form name="login" method="post" action="login.php">
                        Login/Email: <input type="text" name="email"> </br> </br>
                    Senha: <input type="password" name="senha"> </br> </br>
                    <input type="submit" value="Entrar">
                    </form> 
                    </br> </br>
                    <a href="first.php">
                        <img src="img/first.png" title="Criar Nova Conta" style="width: 100px; height: 100px"> </a>
          
                   
                </div>    
            </div>
        </header>    
        </div>
       
    </body>
</html>
