<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
	function __construct()
 	{
   		parent::__construct();
		$this->load->model("usuarios",'',TRUE);
		$this->load->model("menu",'',TRUE);
	}
	function index()
	{
		/*
		$data["titulo"] = "Usuarios";
		$data["menu"] = "Seguridad";
		$data["submenu"] = "usuarios";
 		$this->load->view('templates/app_header');
		$this->load->view('templates/sidebar');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('templates/app_footer');
		 * 
		 */
		 $data["menu"] = $this->menu->get_mymenu();
		 $data["hijos"] = $this->menu->get_childmenu(1,1);
		 $data["main_content"] =  "usuarios/listar_usuarios";
		 $this->load->view('templates/admin_template',$data);
	}
	function edit($id = NULL)
	{
		if(isset($id))
		{
			$data["main_content"] = "usuarios/form";
			
		  /*
			$this->load->library('form_validation');
			$this->form_validation->run();
			$user = $this->usuarios->getuser($id);	
			$data["user"] = $user[0];
			$data["roles"] = $this->users->getroles();
			$data["id"] = $id;
			$customer = $this->users->getcustomer();
			$data["userrol"] = $this->users->getuserrol($id);
			$data["manager"] = $customer["fname_usr"]." ".$customer["lname_usr"].", ".$this->session->userdata("company_cus");
			$data["manageremail"] = $customer["email_usr"];
		 */
			$this->load->view('templates/admin_template',$data);
		} else {
			$this->index();
		}
	}	
	function datatable()
	{
		$this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
        $this->datatables->select('nombres_usr,apellidopaterno_usr,apellidomaterno_usr,usuario_usr,activo_usr,id_usr')
        ->from('seg_usuarios');

        echo $this->datatables->generate();
	}
}