<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	function __construct()
	{
	  parent::__construct();
    $this->load->model('MLogin');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('VLogin');
	}

  function CekLogin()
  {
    $usr_id = $this->input->post('usr_id');
    $usr_pass = $this->input->post('usr_pass');
    $where = array(
      'usr_id' => $usr_id,
      'usr_pass' => md5($usr_pass),
    );

    $cek = $this->MLogin->CekLogin("user", $where)->num_rows();
    if ($cek > 0) {

			$dataSession = array(
				'nama' => $usr_nama,
				'status'=> "login"
			);

			$this->session->set_userdata($dataSession);

			redirect(base_url("index.php/CDashboard"));
    } else {

    	redirect(base_url('index.php/CLogin/'));
			//redirect(base_url("CLogin"));
    }

  }

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/CLogin/'));
	}

}
