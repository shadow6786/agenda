<?php 
class Menu extends CI_model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_childmenu($user,$opm)
	{
		$sql = "SELECT op.nombre_opm, op.ruta_opm
		FROM seg_permisos p 
		LEFT JOIN seg_roles r ON p.rol_per = r.id_rol
		LEFT JOIN seg_opcionesmenu op ON op.id_opm = p.opcionmenu_per
		LEFT JOIN seg_usuarios u ON u.rol_usr = r.id_rol
		WHERE r.activo_rol = 'S' 
		and u.id_usr = ".$this->db->escape($user)." 
		and op.opcionpadre_opm = ".$this->db->escape($opm)." 
		ORDER BY  op.opcionpadre_opm, op.orden_opm ASC";

		$query = $this->db->query($sql);
		$data = FALSE;
		if($query->num_rows() > 0)
		{
			$data = $query->result_array();
		}
		return $data;
	}
	function get_mymenu()
	{
		$id = $this->session->userdata("logged_in");
		$data = FALSE;
		$sql = "
		SELECT p.*, op.*
		FROM seg_permisos p 
		LEFT JOIN seg_roles r ON p.rol_per = r.id_rol
		LEFT JOIN seg_opcionesmenu op ON op.id_opm = p.opcionmenu_per
		LEFT JOIN seg_usuarios u ON u.rol_usr = r.id_rol
		WHERE r.activo_rol = 'S' 
		and u.id_usr = ".$this->db->escape($id)."
		and op.opcionpadre_opm = 0 
		ORDER BY op.orden_opm ASC";
		
		$query = $this->db->query($sql);
		$hijos = array();
		if($query->num_rows() > 0)
		{
			$data= array();
			foreach($query->result() as $row)
			{
				/*
				if(!key_exists($row->id_opm, $data))
				{
					$data[$row->id_opm] = array();
				}
				 * 
				 */
				$hijos = $this->get_childmenu($id, $row->id_opm);
				$data[] = array("padre" => $row->nombre_opm,"link" => $row->ruta_opm, "icon" => $row->icono_opm, 'hijos' => $hijos);
				
			}
		}
		
		return $data;
	}
	
}