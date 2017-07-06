<html>
    <head>
        <meta charset="uft-8">
        <!--Link para imagem no cabeçalho  -->
        <link rel='icon' type='image/jpg' href="img/title.png">
        <title> Cadastrando...</title>
    </head>
    
    <body background="img/fundo.jpg">
        <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $banco = "colecao";
            $conexao = mysqli_connect($host, $user, $pass, $banco);
            if($conexao){
                header('Location: erro_conexao.php');
            }  
        ?>
        
        </br>
        
        <?php
        //ATRIBUI OS DADOS DIGITADOS À VARIAVEIS PARA SEREM SALVAS NO BD
        $nome = $_POST['nome'];
        $nome_comp = $_POST['nome_comp'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = mysqli_query($conexao,"INSERT INTO usuario(nome, sobrenome, email, senha) VALUES('$nome', '$nome_comp', '$email', '$senha')");
        
        if($sql){
            header('Location: cadastrado.php');
        }    
        ?>
        
    </body>
</html>