<?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';
    

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query); //retorna um PDOStatement

        $lista = $stmt->fetchAll();

        echo'<pre>';
        print_r($lista);
        echo'</pre>';

        echo $lista[0][1];
       

    }catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }

    
?>