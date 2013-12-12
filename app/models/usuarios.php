<?php 
Class Usuarios extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function login($user, $pass)	
	{
		$this->db->select('id_usr, usuario_usr');
	   	$this -> db -> from('seg_usuarios');
	   	$this -> db -> where('usuario_usr', $user);
	   	$this -> db -> where('clave_usr',$pass);
	   	$this -> db -> limit(1);
	
	   	$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
		{
	     	return $query->result();
	   	}
	   	else
	   	{
	     	return false;
	   	}
	}
		
	function register_user($email, $password)
	{
		$data = array('username_usr' => $email, 'password_usr' => $password, 'active_usr' => 'S');
		$this->db->insert('sec_users',$data);
		return $this->db->insert_id();
	}
	function getuser($id)
	{
	   	$query = $this->db->get_where('seg_usuarios', array('id_usr' =>$id),1); 
		
		if($query -> num_rows() == 1)
		{
	     	return $query->result();
	   	}
	   	else
	   	{
	     	return false;
	   	}
	}
}