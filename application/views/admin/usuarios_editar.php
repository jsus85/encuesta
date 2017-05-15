<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
    <body>

<div id="app">


 	<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php $this->load->view('admin/include/header.php');?>
      <!--header end-->



	<div class="container">
	    
      <div class="row">
	 		     

      <div class="panel panel-default">
          <div class="panel-heading">Editar</div>
            <div class="panel-body">
              
              <form  method="post" action="<?php echo base_url('admin/usuarios/edit');?>">


                <div class="form-group">
                  <label for="inputUsuario" class="col-md-2 control-label">Usuario</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuarios[0]['user']; ?>" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputClave" class="col-md-2 control-label">Clave</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="clave" name="clave" value="<?php echo $usuarios[0]['clave']; ?>" />
                  </div>
                </div>

                <?php 
                            if (validation_errors()): 
                            echo '<div class="alert alert-dismissible alert-danger">';
                            echo '<a class="close" data-dismiss="alert">×</a>';
                            ?>

                            <?php echo validation_errors(); ?>

                            <?php 
                            echo '</div>';
                            endif; 
                ?>

                <a href="<?php echo base_url('admin/usuarios');?>" class="btn btn-raised btn-primary">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Grabar</button>

             </form>   




            </div>
      </div>

      </div>


                		
	</div>
</div>		
</body>

<!-- Scripts -->
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
	<script>
	    $.material.init();
	</script>
</html>