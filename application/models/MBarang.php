<?php
class MBarang extends CI_Model{
	function selectAll()
	{
		$this->db->order_by("Brg_id","asc");
		return $this->db->get('barang')->result();
	}
}
?>