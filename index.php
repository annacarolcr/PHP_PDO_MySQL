<?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';
    

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios where id = 6
        ';

        $stmt = $conexao->query($query); //retorna um PDOStatement

        $usuario = $stmt->fetch(PDO::FETCH_OBJ); 
                                                    
        echo'<pre>';                                
        print_r($usuario);                            
        echo'</pre>';

        echo $usuario->nome;

    }catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }

    
?>