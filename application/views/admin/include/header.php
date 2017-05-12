<div class="navbar navbar-default">
  <div class="container-fluid">
    	
      <div class="navbar-header">        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>   
        <a class="navbar-brand" href="javascript:void(0)"><?php echo $title;?></a>
    </div>

    <?php 
      if($this->session->userdata('is_logged_in')){
    ?>
    <div class="navbar-collapse collapse navbar-responsive-collapse">     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-question-sign"></i> Preguntas</a></li>        
        <li><a href="<?php echo base_url('admin/usuarios');?>"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>        
        <li><a class="nav-link waves-effect waves-light"><i class="glyphicon glyphicon-log-out"></i> Salir</a></li>

      </ul>
    </div>
    <?php }?>

  </div>
</div>