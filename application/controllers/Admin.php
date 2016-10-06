<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{	
		if($this->session->has_userdata("DataUser")==true){
			$this->load->view('homeb');
			//$this->load->view('homem');
		}else{
			redirect(base_url()."/Sesion");
		}
	}
}