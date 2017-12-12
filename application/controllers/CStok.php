<?php
class CStok extends CI_Controller{
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
		$this->load->view('VStok');
		$this->load->view('footer');
	}

	function edit($brg_id)
	{
		// check if the barang exists before trying to edit it
		$this->data2 = array('brg_id'=>$brg_id);
		$this->data['barang'] = $this->MBarang->get_data("barang",$this->data2);

		if(isset($this->data['barang']['brg_id']))
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('brg_stok','Stok','required');
			$this->form_validation->set_rules('brg_min','Batas','required');

	if($this->form_validation->run())
				{
						$params = array(
							'brg_stok' => $this->input->post('brg_stok'),
							'brg_min' => $this->input->post('brg_min'),
						);

						$this->MBarang->update_data("barang",$brg_id,$params);
						redirect('CStok/index');
				}
				else
				{
					$this->load->view('header',$this->data);
					$this->load->view('VEditStok');
					$this->load->view('footer');
				}
		}
		else
				show_error('The barang you are trying to edit does not exist.');
	}

}
?>
