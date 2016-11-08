<?php
/**
* 
*/
class TipoPersona_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function Get_tipopersona()
	{
		$this->db->select("*");
		$this->db->from("tipopersona");
		$this->db->where("estado",1);
		$this->db->where("id_tp !=",1);
		$data=$this->db->get();
		return $data->result_array();

	}

	public function Get_tipopersonaXID($id)
	{
		$this->db->select("*");
		$this->db->from("tipopersona");
		$this->db->where("estado",1);
		$this->db->where("id_tp !=",1);
		$this->db->where("id_tp",$id);
		$data=$this->db->get();
		return $data->row();

	}
	public function add_persona($persona)
	{
		$this->db->insert("persona",$persona);
		$id = $this->db->insert_id();
		return $id;
	}

}