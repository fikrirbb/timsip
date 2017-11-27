<?php
/**
 *
 */
class MLogin extends CI_Model
{

  function CekLogin($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
}


 ?>
