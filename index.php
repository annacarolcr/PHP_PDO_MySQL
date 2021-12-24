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

        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC -> utiliza índices associativos [nome] no array
                                                    //PDO::FETCH_NUM -> utiliza índices numéricos [1] no array
        echo'<pre>';                                //PDO::FETCH_BOTH -> utiliza índices numéricos e associativos [nome] [1] no array. Basta usar o Both ou deixar vazio
        print_r($lista);                            //PDO::FETCH_OBJ -> retorna um array de objetos
        echo'</pre>';

        echo $lista[0]['nome']; //para acessar os dados do array
        //echo $lista[1]->nome; para acessar os dados do objeto retornado pelo PDO::FETCH_OBJ

    }catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }

    
?>