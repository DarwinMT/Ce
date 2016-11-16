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
		$aux=$_POST["Datos"];
		$persona=json_decode($aux);
		$this->load->model('Persona_model');
		$respuesta=$this->Persona_model->add_persona($persona);
		if($respuesta>0){
			
			$url="Document/Personas/".$persona->id_tp."/";
			if(!file_exists($url)){
				if(mkdir($url,777)){
				}
			}
			if(!file_exists($url.$respuesta)){
				if(mkdir($url.$respuesta."/",777)){
				}
			}

			$url=$url.$respuesta."/";

			if(move_uploaded_file($_FILES["file0"]["tmp_name"],$url.$_FILES["file0"]["name"])){
				$urlavatar=$url."".$_FILES["file0"]["name"];
				$resp = $this->Persona_model->set_avatarpersona($respuesta,$urlavatar);
				if($resp>0){
					echo $resp;
				}else{
					echo "Er2";	
				}

			}else{
				echo "Er1";
			}
		}else{
			echo "Er0";
		}

	}

}