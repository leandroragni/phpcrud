<!doctype html>

<html lang="pt-br">
    
<head>
    <?php include 'page/head/head.php' ?>
    
    <title>Editar item</title>
</head>

<body>
    
    <main>
    
        <div class="container">
            <div class="py-5 text-center">
                <i class='fab fa-php' style='font-size:72px; color:purple'></i>
                <h2>CRUD EM PHP</h2>
                <p class="lead">Edição</p>
            </div>
        
             <div class="row">
                
                <div class="col-md-12 order-md-1">
                    
                    <?php include 'consultas/obtemItem.php' ?>
                
                    <form action="editarItem.php" method="post">
                        
                        <input type=hidden name="id" value="<?php echo $item['id']?>">
                
                        <div class="mb-3">
                          <label for="campo1">Campo1 <span class="text-muted">(Optional)</span></label>
                          <input type="text" name="campo1" class="form-control" id="campo1" placeholder="campo 1"
                            value="<?php echo $item['campo1'] ?>">
                        </div>
            
                        <div class="mb-3">
                          <label for="campo2">Campo2</label>
                          <input type="text" name="campo2" class="form-control" id="campo2" placeholder="campo 2"
                          value="<?php echo $item['campo2'] ?>">
                        </div>
            
                        <div class="mb-3">
                          <label for="address2">Email <span class="text-muted">(Optional)</span></label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="campo 3"
                          value="<?php echo $item['campo3'] ?>">
                        </div>
            
                        <hr class="mb-4">
                        
                        <h4 class="mb-3">Checkbox items</h4>
                        
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="checkbox1" class="custom-control-input" id="same-address">
                          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="checkbox1" class="custom-control-input" id="save-info">
                          <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        
                        <hr class="mb-4">
            
                        <h4 class="mb-3">Radio items</h4>
                        
                        <div class="custom-control custom-radio">
                            <input id="radio1" name="radioItems" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="radio1">Radio 1</label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                            <input id="radio2" name="radioItems" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="radio2">Radio 2</label>
                        </div>
                        
                        <hr class="mb-4">
            
                        <h4 class="mb-3">Data</h4>
                        
                        <div class="mb3">
                            <label for="data1">Data1 <span class="text-muted">(Optional)</span></label>
                            <input type="date" name="data1" class="form-control" id="data1" placeholder="dd/mm/aaaa">
                        </div>
                        
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Editar</button>  
                            </div>
                        </div>
                    
                    </form>
                    
                </div>
                
            </div>
          
        </div>
    
    </main>
    
    <?php include 'page/scripts/bootstrap_scripts.php' ?>
    
</body>

</html>
