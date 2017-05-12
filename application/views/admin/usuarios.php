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
	 		    
          <table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th>#</th>
    <th>Column heading</th>
    <th>Column heading</th>
    <th>Column heading</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="info">
    <td>3</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="success">
    <td>4</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="danger">
    <td>5</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="warning">
    <td>6</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="active">
    <td>7</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
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