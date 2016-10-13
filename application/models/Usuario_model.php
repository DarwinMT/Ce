<?php
/**
* 
*/
class Usuario_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function Get_usuarioexistente($user,$pass)
	{
		$this->db->select("*");
		$this->db->from("usuario");
		$this->db->where("username",$user);
		$this->db->where("password",$pass);
		$data=$this->db->get();
		if($data->num_rows()==1){
			return true;
		}else{
			return false;
		}

	}
	public function Get_datosusuario($user,$pass)
	{
		$this->db->select("*");
		$this->db->from("usuario");
		$this->db->join("datos_usuario", "datos_usuario.id_du= usuario.id_du");
		$this->db->where("usuario.username",$user);
		$this->db->where("usuario.password",$pass);
		$this->db->where("usuario.estado",1);
		$data=$this->db->get();
		//return $data->result();
		//return $data->result_array();
		return $data->row();
	}
}