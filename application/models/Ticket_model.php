<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Ticket_model extends CI_Model{
    private $_table = "ticket";

    public function add($data)
    {
      $this->db->insert($this->_table, $data);
    }

    function list_ticket($userid)
    {
      $this->db->where('user_id', $userid);
      $this->db->order_by('update_at', 'DESC');
      $query = $this->db->get($this->_table);
      return $query->result_array();
    }

    function getticket($id)
    {
      $this->db->where('id_ticket', $id);
      $query = $this->db->get_where($this->_table);
      return $query->row_array();
    }

}
