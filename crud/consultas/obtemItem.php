<?php

include 'conexao.php';

$item = null;

try {
    $stmt = $conexao->prepare('SELECT * FROM crud WHERE id = :id');
    
    $stmt->execute(
        [
            ':id' => $_GET['item'],
        ]
    );
    
    $item = $stmt->fetch();
    
    if ($item) {
        return;
    }
    
    header('Location: lista.php');
}
catch (Exception $e) {
    echo 'Erro:' . $e->getMessage();
}

?>