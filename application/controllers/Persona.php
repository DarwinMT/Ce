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
		$this->load->model('Persona_model');
		echo json_encode($this->Persona_model->Get_tipopersona());		
	}
	public function settpersona()
	{
		$aux=$_POST["Datos"];
		$persona=json_decode($aux);
		$this->load->model('Persona_model');
		$respuesta=$this->Persona_model->add_persona($persona);
		if($respuesta>0){

			//$url=base_url()."Personas/".$persona->id_tp."/";
			//$url="../../Personas/".$persona->id_tp."/";
			$url="../../../";
			if(file_exists($url)){
				echo "e";
				mkdir($url."aaa/",777);
			}else{
				echo "err";
			}
			/*if(move_uploaded_file($_FILES["file0"]["tmp_name"],$url)){
				$urlavatar=$url."".$_FILES["file0"]["name"];
				$resp = $this->Persona_model->set_avatarpersona($respuesta,$urlavatar);
				if($resp>0){
					echo $resp;
				}else{
					echo -1;	
				}

			}else{
				echo -1;
			}*/
			//echo $respuesta;
		}else{
			echo 0;
		}


		//echo $_POST["Datos"];
		//echo  $_FILES["file0"]["name"];
		//echo $persona->ci;

		//$persona = json_decode(file_get_contents('php://input'), true);
		//$aux['ci']
		/*$this->load->model('TipoPersona_model');
		$_POST = json_decode(file_get_contents('php://input'), true);
		$persona = $this->input->post();
		$respuesta=$this->TipoPersona_model->add_persona($persona);
		if($respuesta>0){
			echo $respuesta;
		}else{
			echo 0;
		}*/

	}

}