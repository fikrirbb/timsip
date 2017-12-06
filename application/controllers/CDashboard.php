<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDashboard extends CI_Controller {

	function __construct()
	{
	  parent::__construct();
    if ($this->session->userdata('status') != "login") {
			redirect(base_url('index.php/CLogin/'));
		}
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('header');
		$this->load->view('VDashboard');
		$this->load->view('footer');
	}

}
