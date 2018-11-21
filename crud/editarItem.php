<?php

include 'conexao.php';

try {
    
    $stmt = $conexao->prepare('UPDATE crud SET campo1 = :campo1, campo2 = :campo2, campo3 = :campo3 WHERE id = :id');
    
    $stmt->execute(
        [
            ':id' => $_POST['id'],
            ':campo1' => $_POST['campo1'],
            ':campo2' => $_POST['campo2'],
            ':campo3' => $_POST['email'],
        ]
    );
    
    header('Location: lista.php?msgSucesso="Item editado com sucesso!"');
}
catch (Exception $e) {
    header('Location: lista.php?msgFalha="Falha ao editar item!"');
}
