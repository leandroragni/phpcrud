<?php

include 'conexao.php';

try {
    $stmt = $conexao->prepare('INSERT INTO crud (campo1, campo2, campo3) VALUES (:campo1, :campo2, :campo3)');
    
    $stmt->execute(
        [
            ':campo1' => $_POST['campo1'],
            ':campo2' => $_POST['campo2'],
            ':campo3' => $_POST['email'],
        ]
    );
    
    header('Location: lista.php?msgSucesso="Registro adicionado com sucesso!"');
}
catch (Exception $e) {
    header('Location: lista.php?msgFalha="Falha ao adiconar registro!"');
}
