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

        foreach($conexao->query($query) as $key => $value){
            print_r($value);
            echo '<hr>';
        }

        //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        /*                                            
        echo'<pre>';                                
        print_r($lista_usuarios);                            
        echo'</pre>';
        */

        /*foreach ($lista_usuarios as $key => $value) {
            print_r($value);
            echo '<hr>';

            echo $value['nome'];
            echo '<hr>';
        }*/

    }catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }

    
?>