<?php

class MInputbarang extends CI_Model{
		
		//constructor
		function MInputbarang() {
			parent::__construct();
		}
		
		function simpan($brg_id,
						$brg_jenis,
						$brg_nama,
						$brg_harga,
						$brg_foto,
						$brg_masaberlaku){
			
			$data = array(
				"brg_id"=>$brg_id, 
				"brg_jenis"=>$brg_jenis, 
				"brg_nama"=>$brg_nama, 
				"brg_harga"=>$brg_harga, 
				"brg_foto"=>$brg_foto,
				"brg_masaberlaku"=>$brg_masaberlaku
			);
			$this->db->insert('barang', $data); 
			if($this->db->affected_rows())
				return '1';
			else
				return '0';
			
		}		
}
?>