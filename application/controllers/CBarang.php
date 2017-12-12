<?php
class CBarang extends CI_Controller{
	public $data = array();

	function __construct(){
		parent::__construct();
		$this->load->model('MBarang');
    if ($this->session->userdata('status') != "login") {
			redirect(base_url('index.php/CLogin/'));
		}
		$this->data['notif'] = $this->MBarang->get_notif();
	}

	function index()
	{
		$this->data['barang'] = $this->MBarang->get_all_data("barang");

		$this->load->view('header',$this->data);
		$this->load->view('VBarang');
		$this->load->view('footer');
	}

	function tambah()
	{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('brg_nama','Nama','required');
			$this->form_validation->set_rules('brg_jenis','Jenis','required');
			$this->form_validation->set_rules('brg_harga','Harga','required|integer');


			if($this->form_validation->run())
					{
							$params = array(
								'brg_jenis' => $this->input->post('brg_jenis'),
								'brg_nama' => $this->input->post('brg_nama'),
								'brg_harga' => $this->input->post('brg_harga'),
							);

							$barang_id = $this->MBarang->add_data("barang",$params);
							redirect('CBarang/index');
					}
					else
					{
						$this->load->view('header', $this->data);
						$this->load->view('VTambah');
						$this->load->view('footer');
					}
	}

	function edit($brg_id)
	{
			// check if the barang exists before trying to edit it
			$this->data2 = array('brg_id'=>$brg_id);
			$this->data['barang'] = $this->MBarang->get_data("barang",$this->data2);

			if(isset($this->data['barang']['brg_id']))
			{
				$this->load->library('form_validation');

				$this->form_validation->set_rules('brg_nama','Nama','required');
				$this->form_validation->set_rules('brg_jenis','Jenis','required');
				$this->form_validation->set_rules('brg_harga','Harga','required|integer');

		if($this->form_validation->run())
					{
							$params = array(
								'brg_jenis' => $this->input->post('brg_jenis'),
								'brg_nama' => $this->input->post('brg_nama'),
								'brg_harga' => $this->input->post('brg_harga'),
							);

							$this->MBarang->update_data("barang",$brg_id,$params);
							redirect('CBarang/index');
					}
					else
					{
						$this->load->view('header',$this->data);
						$this->load->view('VEdit');
						$this->load->view('footer');
					}
			}
			else
					show_error('The barang you are trying to edit does not exist.');
	}

	function hapus($brg_id)
	{
			$this->data = array('brg_id'=>$brg_id);
			$barang = $this->MBarang->get_data("barang",$this->data);

			// check if the barang exists before trying to delete it
			if(isset($barang['brg_id']))
			{
					$this->data = array('brg_id'=>$brg_id);
					$this->MBarang->delete_data("barang", $this->data);
					redirect('CBarang/index');
			}
			else
					show_error('The barang you are trying to delete does not exist.');
	}

}
?>
