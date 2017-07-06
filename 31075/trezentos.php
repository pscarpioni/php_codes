<html>
    <head>
        <meta charset="UTF-8">
        <title>Acima de 249 Reais</title>
    </head>
    <body>
        <?php
	//CRIA A CONEXÃO COM O BANCO
            $host = "localhost";
            $user = "root";
            $pass = "";
            $banco = "livraria";
            $conexao = mysqli_connect($host, $user, $pass, $banco) ;
            if($conexao)
		echo("Conexao com o BD bem sucedida");
            else
		echo("erro");
	?>
        
        <?php
            $sql = mysqli_query($conexao, "SELECT * FROM livro WHERE preco>=250");
            $row = mysqli_num_rows($sql);
            if($row > 0) {
                
                echo"</br> Livros acima de 249 Reais: ";
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
        <img src="img/livro10.jpg" alt="book10" title="Java 8 Como Programar"></img>
        
    </body>       
</html>