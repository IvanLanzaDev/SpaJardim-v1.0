<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php
        include('functions.class.php'); 
      ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Mensagens</h2> 
            <h3 class="text-center hidden-md hidden-lg">Mensagens</h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="view-message.php">Mensagens</a></li>
              <li class="active">Apagar Mensagens</li>
            </ol>
        </div>
         <?php 
        if($delete_contact){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> A mensagem foi apagada
                </div>
                ";      
        }
         ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4>Tem certeza ?</h4>
            <p>Voc&ecirc; est&aacute; prestes a excluir uma mensagem.</p>
            
            <div>
                <form method="post" action="">
                    <input type="hidden" name="id_products" value="<?php $list_get_edit_products['id_products']; ?>">
                    
                    <button type="submit" class="btn btn-danger" name="btn_delete_message">Confirmar</button>
                    <a href="view-message.php" class="btn btn-default">Cancelar</a>
                </form>    
                
            </div>
            
        </div>

    </div>
  </body>
</html>