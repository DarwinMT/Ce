<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Persona extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{	
		if($this->session->userdata("Id")>0){
			$datos["usuario"]=$this->session->userdata();
			$this->load->view('homeb',$datos);
			//$this->load->view('homem',$datos);
		}else{
			$this->session->sess_destroy();
			redirect(base_url()."/Sesion");
		}

		
	}
	public function gettipopersona()
	{
		$this->load->model('TipoPersona_model');
		echo json_encode($this->TipoPersona_model->Get_tipopersona());		
	}
	public function settpersona()
	{
		//$persona = json_decode(file_get_contents('php://input'), true);
		//$aux['ci']
		$this->load->model('TipoPersona_model');
		$_POST = json_decode(file_get_contents('php://input'), true);
		$persona = $this->input->post();
		$respuesta=$this->TipoPersona_model->add_persona($persona);
		if($respuesta>0){
			echo $respuesta;
		}else{
			echo 0;
		}

	}

}