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
	<div class="row"></div>
	<div class="row">
			<div class="col-md-8 col-md-offset-2">
			
				<div class="panel panel-default">
                		
                		<div class="panel-heading">Login</div>
                		
	                		<div class="panel-body">
					
							<?php
						            $attributes = array('class' => 'form-login','method'=>'post');
						            echo form_open('admin/login/validar', $attributes);
							?>

								<div class="form-group">
									<label for="email" class="col-md-4 control-label">Usuario</label>
									<div class="col-md-6">
										<input id="email" type="text" name="email" name="email" value="" required="required" autofocus="autofocus" class="form-control">
									</div>
								</div>	
								<div class="form-group">
									<label for="password" class="col-md-4 control-label">Passwords</label>
									<div class="col-md-6">
										<input type="password" name="password" id="password" value="" required="required" autofocus="autofocus" class="form-control">
									</div>
								</div>	


								<?php
										if(isset($message_error) && $message_error){
											echo '<div class="alert alert-danger" role="alert">';
											echo '<a class="close" data-dismiss="alert">×</a>';
											echo '<strong>Error !</strong> Email y Contraseña incorrecto.';
											echo '</div>';             
										}
?> 

								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<button type="submit" class="btn btn-primary">Enviar</button> 
		                                <a href="http://localhost/carrito/public/password/reset" class="btn btn-link">Forgot Your Password?</a>
	                                </div>
                                </div>

									

								</form>	
	                		</div>
	





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