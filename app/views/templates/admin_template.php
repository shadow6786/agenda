<?php
	$this->load->view('templates/basic_metas');
	if(isset($css))
		$this->load->view('templates/basic_css');
	$this->load->view('templates/admin_header');
	$this->load->view('templates/basic_sidebar');
	$this->load->view($main_content);
	if(isset($scripts))
		$this->load->view('templates/basic_js');
	$this->load->view('templates/admin_footer');
?>