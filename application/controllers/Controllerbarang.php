<?php
class Controllerbarang extends CI_Controller{
public function __construct()
{
      parent::__construct();
      $this->load->model('Modelbarang');
}
function index()
{
$data['title'] = 'Menampilkan Stok Barang';
 
      //memanggil function selectAll di model Modelbarang, dimasukkan ke $data['barang']
      $data['barang'] = $this->Modelbarang->selectAll();      
 
      //meload view bernama viewbarang.php dengan data variable adalah $data
      $this->load->view('viewbarang', $data);
}
 
function input()
{
      $this->load->view('view_inputbarang');
}
function tambah()
{
        $this->Modelbarang->input();     
        redirect ('Controllerbarang');
}
 
function delete($id)
{
        $this->Modelbarang->delete($id);
        redirect('Controllerbarang');
}
function edit($id) 
{
        if($_POST==NULL) {
            $data['no'] = $this->Modelbarang->select($id);
            $this->load->view('view_edit',$data);
        }else {
            $this->Modelbarang->update($id);
            redirect('Controllerbarang');
        }
}
 
}
?>