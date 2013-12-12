<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __contruct()
	{
		parent::construct();
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
		 $data["main_content"] =  "inicio/index";
		 $this->load->view('templates/admin_template',$data);
	}
}