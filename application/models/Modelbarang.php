<?php
class Modelbarang extends CI_Model{
	public function __construct(){
		parent ::__construct();
		$this->load->database();
	}
   function selectAll()
   {
	   
	$this->db->order_by("Id_Barang","desc"); 
	return $this->db->get('barang')->result();
   }
   
   function input()
   {
	
	$Id_Barang = $this->input->post('id_barang');
	$Jenis_Barang = $this->input->post('jenis_barang');
	$Nama_Barang=$this->input->post('nama_barang');
	$harga_Barang=$this->input->post('harga_barang');
	$Foto_Barang=$this->input->post('nama_barang');
	$Masaberlaku_Barang=$this->input->post('masaberlaku_barang');
	$data = array( 'id_barang'=>$Id_Barang, 'jenis_barang'=>$Jenis_Barang, 'nama_barang'=>$Nama_Barang, 'harga_barang'=>$Harga_Barang, 'foto_barang'=>$Foto_Barang, 'masaberlaku_barang'=>$Masaberlaku_Barang );
	$this->db->insert('barang',$data);	
   }
function delete($id_barang)
   {
        $this->db->delete('barang', array('id_barang'=>$id_barang));
   }
function update($id_barang)
   {
        $this->db->where('id_barang',$id_barang)->update('barang', $_POST);
   }
function select($id_barang)
   {
        return $this->db->get_where('barang', array('id_barang'=>$id_barang))->row();
    }
 
}
?>