<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {
	function __construct()
 	{
   		parent::__construct();
		$this->load->model("usuarios",'',TRUE);
		$this->load->model("menu",'',TRUE);
	}
	function index()
	{
		$data["menu"] = $this->menu->get_mymenu();
		$data["hijos"] = $this->menu->get_childmenu(1,1);
		$data["main_content"] =  "calendario/index";
		$this->load->view('templates/admin_template',$data);
	}
}