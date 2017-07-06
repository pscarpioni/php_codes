<html>
    <head>
        <meta charset="UTF-8">  <!--CARACTERES ESPECIAIS-->
        <title>Banco de Dados</title>
    </head>
    <body>
        <?php 
	//CRIA A CONEXÃO COM O BANCO
            $host = "localhost"; //ENDEREÇO LOCAL ONDE O BANCO SE ENCONTRA
            $user = "root"; //USUÁRIO DO BANCO
            $pass = "";//SENHA DE ACESSO
            $banco = "livraria"; // NOME DO BANCO EM QUESTÃO
            $conexao = mysqli_connect($host, $user, $pass, $banco) ; //CRIA A CONEXÃO
            if($conexao)//TESTA A CONEXÃO
		echo("Conexao com o BD bem sucedida");
            else
		echo("erro");
	?>
        
        <?php
            $assunto = "Banco de Dados"; //DEFINE UMA VARIAVEL PARA TRATAR O CASO "banco de dados"
            //PEGA A VARIÁVEL DE CONEXÃO, PARA CIOMUNICAR COM O BANCO, E SELECIONA DA TABELA LIVRO ONDE O CAMPO É ASSUNTO
            $sql = mysqli_query($conexao, "SELECT * FROM livro WHERE assunto='$assunto'");
            $row = mysqli_num_rows($sql);
            if($row > 0) {
                
                echo"</br> Livros de Banco de Dados: ";
                while($linha = mysqli_fetch_array($sql)){
                    $isbn = $linha['isbn'];
                    $titulo = $linha ['titulo'];
                    $autor = $linha['autor'];
                    $preco = $linha['preco'];
                    $editora = $linha['editora'];
                    $idioma = $linha['idioma'];
                    $ano = $linha['ano'];
                    $npag = $linha['nro_paginas'];
                    echo"</br> </br>";
                    echo"<strong> ISBN:</strong>".@$isbn;
                    echo"</br>";
                    echo"<strong> Título:</strong>".@$titulo;
                    echo"</br>";
                    echo"<strong>Autor:</strong>".@$autor;
                    echo"</br>";
                    echo"<strong>Preço(R$): </strong>".@$preco;
                    echo"</br>";
                    echo"<strong>Editora:</strong>".@$editora;
                    echo"</br>";
                    echo"<strong>Idioma:</strong>".@$idioma;
                    echo"</br>";
                    echo"<strong>Ano:</strong>".@$ano;
                    echo"</br>";
                    echo"<strong>Assunto:</strong>".@$assunto;
                    echo"</br>";
                    echo"<strong>Nº Páginas:</strong>".@$npag;   
                }    
            }else{
                echo "Registro Não Encontrado";
            }   
        ?>
        </br>
        <img src="img/livro3.jpg" alt="book3" title="Beginning SQL Queries"></img>
        </br>
        <a href="assunto.php"> 
           <input type="button" value="Retornar à assuntos" </a>
    </body>       
</html>