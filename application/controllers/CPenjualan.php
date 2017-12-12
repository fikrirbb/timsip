<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPenjualan extends CI_Controller {
	public $data = array();

	function __construct()
	{
	  parent::__construct();
		$this->load->model('MBarang');
    if ($this->session->userdata('status') != "login") {
			redirect(base_url('index.php/CLogin/'));
		}
		$this->data['notif'] = $this->MBarang->get_notif();
	}

	public function index()
	{
		$this->data['barang'] = $this->MBarang->get_all_data("barang");
		$this->load->view('header',$this->data);
		$this->load->view('VPenjualan');
		$this->load->view('footer');
	}

}
