<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
                parent::__construct();
                // Your own constructor code
			    $this->load->model('Usuarios_model');	  
			               
    }

	public function index()
	{
		$data['title'] = 'Mantenimiento Usuarios';
		$data['list'] =  $this->Usuarios_model->all();  			
		$this->load->view('admin/usuarios',$data);
	}




	public function panel(){
		$data['title'] = 'Panel de Administracion';
		$this->load->view('admin/panel',$data);	
	}

	public function add()
	{

		//datos enviados por post 
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			
			$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
			$this->form_validation->set_rules('clave', 'clave', 'trim|required');

					if($this->form_validation->run() == FALSE)
					{					
						$data['message_error'] = TRUE;
					
					}else{

							$data = array(
										'user'   => $this->input->post('usuario'),
										'clave'  => $this->input->post('clave'),
										'fecha'		=> 'now()'
							);

							//si inserta correctamente  retorna true
			                if($this->Usuarios_model->save($data)){
									 redirect('admin/usuarios', 'refresh');
			                }else{

			                    $data['message_error'] = FALSE; 
			                }


					}
		
		}



		$data['title'] = 'Nuevo Usuario';
		$this->load->view('admin/usuarios_nuevo',$data);
	}// nuevo


	function edit(){
		  
		   $id = $this->uri->segment(4);
		   
		    //usuarios data 
	        $data['usuarios'] = $this->Usuarios_model->get_data_by_id($id);
	        $data['title'] = 'Editar Usuario';
	        $this->load->view('admin/usuarios_editar',$data); 



	}

}
