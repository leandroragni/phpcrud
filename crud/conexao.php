<?php

$stringDeConexao = 'pgsql:host=localhost; port=5432; dbname=crudphp; user=ubuntu; password=ubuntu';

$conexao = null;

try {
    
    $conexao = new PDO($stringDeConexao);

} catch (Exception $e) {
    echo 'Falha ao estabelecer conexão';
}

?>