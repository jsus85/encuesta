<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$data['title'] = 'Sistema de Acceso';
		$this->load->view('admin/login',$data);
	}

	public function validar(){
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		$data['title'] = 'Sistema de Acceso';

		if($this->form_validation->run() == FALSE)
		{

			$data['message_error'] = TRUE;
			$this->load->view('admin/login',$data);

		}else{

				$this->load->model('Login_model');

				$user_name = $this->input->post('email');
				$password  = $this->input->post('password');

				$is_valid = $this->Login_model->validate($user_name, $password);


				$estado = isset($is_valid[0]->estado)?$is_valid[0]->estado:'';
				if( $estado ==1 )
				{

					$data = array(
						'user_name'    => $user_name,
						'idUsuario'   => $is_valid[0]->id,
						'is_logged_in' => true
					);

					$this->session->set_userdata($data);
					
					redirect(base_url('panel'));					

				}else{

					$data['message_error'] = TRUE;
					$this->load->view('admin/login', $data);
				}	
			
			
		}	// elSe

	}// End Validar


	public function panel(){
		$data['title'] = 'Panel de Administracion';
		$this->load->view('admin/panel',$data);	
	}

}
