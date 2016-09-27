<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sesion extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		//$this->load->model('usuario_model');
		//$this->load->library('session');
		$this->load->helper('url');
		
	}

	public function index()
	{	
		//login boostrap 3
		//$this->load->view('login');

		//login materialize 
		$this->load->view('loginm');
	}

	public function Init_sesion()
	{	
		$this->load->model('Usuario_model');
		$email=$this->input->post("email",TRUE);
		$pass=$this->input->post("password",TRUE);
		$pass=md5($pass);
		$validar=$this->Usuario_model->Get_usuarioexistente($email,$pass);
		if($validar==true){
			//$this->load->view('homeb');
			$this->load->view('homem');
		}else{
			//$this->load->view('login');
			$this->load->view('loginm');
		}
	}
}