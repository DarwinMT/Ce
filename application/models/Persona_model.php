<?php
/**
* 
*/
class Persona_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_persona($persona)
	{
		$this->db->insert("persona",$persona);
		$id = $this->db->insert_id();
		return $id;
	}
	public function set_avatarpersona($id,$url)
	{
		$this->db->set("avatar",$url);
		$this->db->where("id_p",$id);
		$this->db->update("persona");

		return $this->db->affected_rows();

	}

}