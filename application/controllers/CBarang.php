<?php
class CBarang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('MBarang');
	}
	function index()
	{
		$this->load->view('header');
		$data['title']='Data Barang';
		$data['barang']=$this->MBarang->selectAll();
		$this->load->view('VBarang',$data);
		$this->load->view('footer');
	}
	
	function tambah()
	{
		$this->load->view('header');
		$this->load->view('VTambah');
		$this->load->view('footer');
	}

	function edit()
	{
		$this->load->view('header');
		$this->load->view('VEdit');
		$this->load->view('footer');
	}
	
}
?>