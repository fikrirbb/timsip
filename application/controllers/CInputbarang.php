<?php
class CInputbarang extends CI_Controller {
 
    //constructor
    function CInputbarang(){
        parent::__construct();
       // session_start();
        $this->load->model('MInputbarang', '', TRUE);
    }
     
    //set index
    function index(){
		 $this->load->view('header');
        $this->load->view('VInputbarang.php');
		$this->load->view('footer');
    }
     
    function simpan(){
        //POST varible here
        //auto increment, don't accept anything from form values
        $brg_id=trim(@$_POST["brg_id"]);
        $brg_id=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_id);
        $brg_id=htmlspecialchars($brg_id,ENT_QUOTES);
        $brg_jenis=trim(@$_POST["brg_jenis"]);
        $brg_jenis=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_jenis);
        $brg_jenis=htmlspecialchars($brg_jenis,ENT_QUOTES);
        $brg_nama=trim(@$_POST["brg_nama"]);
        $brg_nama=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_nama);
        $brg_nama=htmlspecialchars($brg_nama,ENT_QUOTES);
        $brg_harga=trim(@$_POST["brg_harga"]);
        $brg_harga=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_harga);
        $brg_harga=htmlspecialchars($brg_harga,ENT_QUOTES);
        $brg_foto=trim(@$_POST["brg_foto"]);
        $brg_foto=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_foto);
        $brg_foto=htmlspecialchars($brg_foto,ENT_QUOTES);
		$brg_masaberlaku=trim(@$_POST["brg_masaberlaku"]);
        $brg_masaberlaku=str_replace("/(<\/?)(p)([^>]*>)", "",$brg_masaberlaku);
        $brg_masaberlaku=htmlspecialchars($brg_masaberlaku,ENT_QUOTES);
         
        $result=$this->MInputbarang->simpan($brg_id,
                                             $brg_jenis,
                                             $brg_nama,
                                             $brg_harga,
                                             $brg_foto,
											 $brg_masaberlaku);
         
        if($result=='0'){
            $data["msg"]="Data tidak bisa disimpan";
        }else{
            $data["msg"]="Data sukses disimpan";
        }
        $this->load->vars($data);
        $this->index();
    }
	
	function list()
	{
		$data['title'] = 'Menampilkan Stok Barang';
 
      //memanggil function selectAll di model Modelbarang, dimasukkan ke $data['barang']
      $data['barang'] = $this->Modelbarang->selectAll();      
 
      //meload view bernama viewbarang.php dengan data variable adalah $data
      $this->load->view('VTbarang', $data);
	}
     
}
?>