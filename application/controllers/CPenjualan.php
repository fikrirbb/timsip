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

	function tambah()
	{
		$brg_id = $this->input->post('brg_id');
		$brg_qty = $this->input->post('brg_qty');

		$data2 = array('brg_id'=>$brg_id);
		$this->data['barang'] = $this->MBarang->get_data("barang",$this->data2);
		if (isset($this->data['barang'])) {
			foreach ($this->data['barang'] as $b)
				{
				$ac = array(
				'brg_id' => $brg_id,
				'name' => $b['brg_nama'],
				'qty' => $brg_qty,
				'price' => $b['brg_harga']
				);
				$this->cart->insert($ac);
				echo $this->view();
		}

	}

}

	function load()
	{
	 echo $this->view();
	}

	function remove()
	{
		$brg_id = $_POST["row_id"];
		$data = array (
			'brg_id' => $brg_id,
			'qty' => 0
		);
		$this->cart->update($data);
	}

	function clear()
	{
		$this->load->library("cart");
	 $this->cart->destroy();
	 echo $this->view();
	}

	function view()
	{
		$output = "";
		$output .= '
		<div class="table-responsive">
		<table class="table table-bordered color-bordered-table info-bordered-table">
		<thead>
		<tr>
		    <th>#</th>
		    <th>Nama Barang</th>
		    <th>Qty</th>
		    <th>Harga @</th>
		    <th>Sub Total</th>
		    <th><button class="btn btn-warning hapus-semua"  id="clear_cart" >Hapus Semua</button>
		</tr>
		</thead>';
	$count=0;
	$output .='
	<tbody>
	';
	foreach ($this->cart->contents as $items) {
		$count++;
		$output.='
		<tr>
      <td><?= $items["id"] ?></td>
      <td><?= $items["name"] ?></td>
      <td><?= $items["qty"] ?></td>
      <td><?= $items["price"] ?></td>
      <td><?= $total = $items["price"]*$items["qty"] ?></td>
        <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["id"].'">Remove</button></td>
    </tr>
		';
	}
	$output .='
	<tr>
    <td colspan="4" align="right">Total</td>
    <td>'.$this->cart->total().'</td>
   </tr>
	 </tbody>
  </table>
	</div>
	';
	if($count == 0)
  {
   $output = '<h3 align="center">Cart is Empty</h3>';
  }
  return $output;
}
}
