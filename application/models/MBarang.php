<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Mbarang extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_notif()
    {
      return $query = $this->db->query("select * from barang where brg_stok <= brg_min")->result_array();
        //$this->db->from('barang');
        //$this->db->where('brg_id',$id);
        //return $this->db->count_all_results();
    }

    /*
     * Get barang by brg_id
     */
    function get_data($db,$data)
    {
        return $this->db->get_where($db, $data)->row_array();
    }

    /*
     * Get all barang
     */
    function get_all_data($db)
    {
        return $this->db->get($db)->result_array();
    }

    /*
     * function to add new barang
     */
    function add_data($db,$data)
    {
        $this->db->insert($db,$data);
        return $this->db->insert_id();
    }

    /*
     * function to update barang
     */
    function update_data($db,$id,$params)
    {
        $this->db->where('brg_id',$id);
        return $this->db->update($db,$params);
    }

    /*
     * function to delete barang
     */
    function delete_data($db, $data)
    {
        return $this->db->delete($db, $data);
    }
}
