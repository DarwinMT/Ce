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
}