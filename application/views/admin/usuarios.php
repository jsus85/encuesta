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
	 		  <a href="<?php echo base_url('admin/usuarios/add');?>" class="btn btn-raised btn-primary"><i class="glyphicon glyphicon-pencil"></i> Nuevo</a>  
        <table class="table table-striped table-hover ">
        <thead>
        <tr>
          <th>#</th>
          <th>Usuario</th>
          <th>Clave</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $i = 1;
                foreach ($list as $value) {
            ?>

        <tr>
          <td><?php echo $i;?></td>
          <td><a href="<?php echo site_url().'admin/usuarios/edit/'.$value->id;?>"><i class="glyphicon glyphicon-pencil"></i> <?php echo $value->user;?></a></td>
          <td><?php echo $value->clave;?></td>
          <td><a title="Eliminar Empleado" ><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
        <?php  $i++;  }?>
        </tbody>
      </table>
      

        

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