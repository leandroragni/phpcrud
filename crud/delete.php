<?php

include 'conexao.php';

try {
    
    $stmt = $conexao->prepare('DELETE FROM crud WHERE id = :id');
    
    $stmt->execute(
        [
            ':id' => $_GET['item'],
        ]
    );
    
    header('Location: lista.php?msgSucesso="Item removido com sucesso!"');
}
catch (Exception $e) {
    header('Location: lista.php?msgSucesso="Falha ao remover item!"');
}
