<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sesion extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		//$this->load->model('usuario_model');
		$this->load->library('session');
		$this->load->helper('url');
		
	}

	public function index()
	{	
		//login boostrap 3
		$this->load->view('login');

		//login materialize 
		//$this->load->view('loginm');
	}

	public function Init_sesion()
	{	
		$this->load->model('Usuario_model');
		$email=$this->input->post("email",TRUE);
		$pass=$this->input->post("password",TRUE);
		$pass=md5($pass);
		$validar=$this->Usuario_model->Get_usuarioexistente($email,$pass);
		if($validar==true){

			$DatosUsuario=$this->Usuario_model->Get_datosusuario($email,$pass);
			$DatosUsuario=array(
				'Id' => $DatosUsuario->id_du,
				'Nombre'=> $DatosUsuario->apelllido." ".$DatosUsuario->nombre,
				'Rol'=> 1,
				'Permisos'=> 2 );
			$this->session->set_userdata($DatosUsuario);

			redirect(base_url()."/Admin");
		}else{
			redirect(base_url()."/Sesion");
		}
	}
	public function Close_session()
	{
		$this->session->sess_destroy();
		redirect(base_url()."/Sesion");
	}
}