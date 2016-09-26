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
}