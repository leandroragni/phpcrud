<!doctype html>

<html lang="pt-br">
    
<head>
    <?php include 'page/head/head.php' ?>
    
    <title>Listagem de dados</title>
</head>

<body>
    
    <main>
        
        <div class="container">
            <div class="py-5 text-center">
                <i class='fab fa-php' style='font-size:72px; color:purple'></i>
                <h2>CRUD EM PHP</h2>
                <p class="lead">Lista</p>
            </div>
            
            <div class="alert alert-success invisible" role="alert" id="div-msg-sucesso">
            </div>
            
            <div class="alert alert-info invisible" role="alert" id="div-msg-falha">
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
                    <a href="adicionar.php" class="btn btn-primary my-2 offset-md-11">Incluir item</a>
                </div>
            </div>
            
            <?php include 'conexao.php' ?>
            
            <table class="table">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Campo1</th>
                    <th scope="col">Campo2</th>
                    <th scope="col">Campo3</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    include 'consultas/listagem.php';
                    
                    foreach ($resultados as $resultado) {
                ?>
                  <tr>
                    <td><?php echo $resultado['id'] ?></td>
                    <td><?php echo $resultado['campo1'] ?></td>
                    <td><?php echo $resultado['campo2'] ?></td>
                    <td><?php echo $resultado['campo3'] ?></td>
                    <td>
                        <a href="editar.php?item=<?php echo $resultado['id']?>">
                          <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="delete.php?item=<?php echo $resultado['id']?>">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                  </tr>
                <?php 
                    }
                ?>
              </tbody>
            </table>
        
        </div>
        
    </main>
    
    <?php include 'page/scripts/bootstrap_scripts.php' ?>
    <script src="page/scripts/retorno_crud.js"></script>
    
</body>

</html>
