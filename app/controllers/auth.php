<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
 	{
 		parent::__construct();
		$this->load->model('usuarios','',TRUE);
	}
	public function index()
	{
		$this->login();
	}
	function login()
	{
		$var = $this->session->userdata('logged_in');
		if(!empty($var))
		{
			redirect('admin/inicio','refresh');
		}
		$data["main_content"] = "auth/login";
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div style="color: #B50404;">', '</div>');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
   		$this->form_validation->set_rules('password', 'Contraña', 'trim|required|xss_clean|md5');
		$data["errcss"] = "none";
		$data["err"] ="";
		if($this->form_validation->run() == FALSE )
	   	{
	   		$this->load->view('templates/basic_template',$data);
	   	}
	   	else
	   	{
			$var = $this->verify_data($this->input->post('password'));
			if($var === TRUE)
			{
				//aqui pregunto si $sesion['url'] q me paso el get esta posteada y lo mando a la url de data y vaciar sesion url
				//$url=$this->session->userdata('return_url');
				//if(isset($url))
				//{
				//	$this->session->unset_userdata('return_url');
				//	redirect(base_url('admin/usuario'));				
				//}
				//else
				//{
					redirect('admin/inicio','refresh');
				//}
			}
			else
			{
				//echo "error para ingresar con la cuenta";
				$data["err"] = $var;
				$data["errcss"] = "block";
				
				$this->load->view('templates/basic_template',$data);
			}
	   	}
	}

	function verify_data($password)
	{
		$user = $this->input->post('usuario');
		$result = $this->usuarios->login($user, $password);
		if($result)
		{
			$sess_arr = "";
			foreach($result as $row)
			{
				$sess_arr = $row->id_usr;
			}
			$this->session->set_userdata('logged_in',$sess_arr);
			return TRUE;
		}
		else
		{
			return "Error, usuaio o clave incorrectos.";
		}
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect(base_url(),'refresh');
	}
	
}