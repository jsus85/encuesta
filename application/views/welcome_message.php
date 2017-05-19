<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Encuesta On-line</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
    <body>

<div id="app">


 	<div class="navbar navbar-default">
  <div class="container-fluid">
    	
      <div class="navbar-header">        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>   
        <a class="navbar-brand" href="javascript:void(0)">Encuesta</a>
    </div>


  </div>
</div>



	<div class="container">	    

      <div class="row">
      	     <form  method="post" action="<?php echo base_url('welcome/save');?>">

			<div class="jumbotron">
				
				<!-- -->
				<?php 

				$ci = &get_instance();
				$ci->load->model("Encuestas_model");
				$i=0;	
                foreach ($preguntas as $value) {

               	 $opciones = $ci->Encuestas_model->get_data_by_question($value->id);                               

            ?>
				<h1><?php echo $value->nombres;?></h1>
				<div class="progress">
				  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
				</div>

					<?php 
							foreach ($opciones as $value2) {
					?>					
						<div class="radio">
							<label>
								<input type="radio" name="opciones<?php echo $value->id;?>" id="opciones<?php echo $value->id;?>" value="<?php echo $value2->id;?>" >
							<?php echo $value2->nombres;?>
							</label>
						</div>
						<?php }?>

				<?php $i++; }

				?>
				<!-- -->
				<input type="hidden" name="idx" id="idx" value="<?php echo $i;?>" />
				<button class="btn btn-raised btn-success">Enviar</button>		

			</div>
        
			</form>
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