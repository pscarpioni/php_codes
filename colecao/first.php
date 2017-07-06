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
        <title> Cadastro de Novo Usuário </title>
    </head>
    <body background="img/fundo.jpg">
        </br>
        </br>
        </br>
        <div id="title">
        <header class="row">  
            <div class="col-md-12">
                Criar Nova Conta ! </br> </br>
                <div id="text">
                 <form name="signup" method="post" action="cadastrando.php">  
                    Nome: <input type="text" name="nome" > </input> </br> </br>
                    Nome Completo: <input type="text" name="nome_comp"> </input> </br> </br>
                    Email: <input type="text" name="email"> </input> </br> </br>
                    Senha: <input type="password" name="senha"> </input> </br> </br>
                    <input type="submit" value="Cadastrar"> </br>
                </form>    
                    
                </div>    
            </div>
        </header>    
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
