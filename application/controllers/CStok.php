<?php
class CStok extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('MStok');
	}
	function index()
	{
		$this->load->view('header');
		$data['title']='Stok Barang';
		$data['barang']=$this->MStok->selectAll();
		$this->load->view('VStok',$data);
		$this->load->view('footer');
	}
	
	function tambah()
	{
		$this->load->view('header');
		$this->load->view('VTambahstok');
		$this->load->view('footer');
	}

	function edit()
	{
		$this->load->view('header');
		$this->load->view('VEditstok');
		$this->load->view('footer');
	}
	
}
?>