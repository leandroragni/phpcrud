<?php

include './conexao.php';

$resultados = $conexao->query('select * from crud')->fetchAll();

?>